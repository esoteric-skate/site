<?php

session_start();

if (isset($_SESSION["curUser"])) {
    header("Location: ../../pages/index.php" );
    exit();
}

$uname = $_POST["luser"];
$pass = $_POST["lpass"];

$_SESSION["lError"] = NULL;
$_SESSION["rError"] = NULL;

// validate username is alpha numeric and at least 5 chars long
if(!preg_match('/^\w{5,}$/', $uname)) {
    $_SESSION["lError"] = "INVALID USERNAME";
    header("Location: ../../pages/login.php" );
    exit();
}
//password needs to be 8+ chars, have an upercase character and have a digit
else if(!(preg_match('/^\w{8,}$/', $pass)) || !(preg_match('/[A-Z]/', $pass)) || !(preg_match('/[0-9]/', $pass))) {
    $_SESSION["lError"] = "INVALID PASSWORD";
    header("Location: ../../pages/login.php" );
    exit();
}

/* fake a database using an array in session variables
not persistant but it works for a demo */
if (!isset($_SESSION["usernames"])) {
    $_SESSION["usernames"] = [];
}
if (!isset($_SESSION["passwords"])) {
    $_SESSION["passwords"] = [];
}

if (array_search($uname, $_SESSION["usernames"]) !== false && password_verify($pass, $_SESSION["passwords"][array_search($uname, $_SESSION["usernames"])])) {
    $_SESSION["curUser"] = $uname;
}
else {
    $_SESSION["lError"] = "INVALID LOGIN";
    header("Location: ../../pages/login.php" );
    exit();
}

header("Location: ../../pages/index.php" );
exit();

?>
