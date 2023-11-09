<?php

session_start();

if (isset($_SESSION["curUser"])) {
	header("Location: ../../pages/index.php");
	exit();
}

$uname = $_POST["ruser"];
$email = $_POST["remail"];
$pass = $_POST["rpass"];

$_SESSION["rError"] = NULL;
$_SESSION["lError"] = NULL;

// validate username is alpha numeric and at least 5 chars long
if (!preg_match('/^\w{5,}$/', $uname)) {
	$_SESSION["rError"] = "INVALID USERNAME";
	header("Location: ../../pages/login.php");
	exit();
}
// validate email
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$_SESSION["rError"] = "INVALID EMAIL";
	header("Location: ../../pages/login.php");
	exit();
}
//password needs to be 8+ chars, have an upercase character and have a digit
else if (!(preg_match('/^\w{8,}$/', $pass)) || !(preg_match('/[A-Z]/', $pass)) || !(preg_match('/[0-9]/', $pass))) {
	$_SESSION["rError"] = "INVALID PASSWORD";
	header("Location: ../../pages/login.php");
	exit();
}

// email can be discarded, It's not used anywhere else
$email = "";
// hash password 
$pass = password_hash($pass, PASSWORD_DEFAULT);

/* fake a database using an array in session variables
not persistant but it works for a demo */
if (!isset($_SESSION["usernames"])) {
	$_SESSION["usernames"] = [];
}
if (!isset($_SESSION["passwords"])) {
	$_SESSION["passwords"] = [];
}

if (array_search($uname, $_SESSION["usernames"]) === false) {
	array_push($_SESSION["usernames"], $uname);
	array_push($_SESSION["passwords"], $pass);
} else {
	$_SESSION["rError"] = "USERNAME TAKEN";
	header("Location: ../../pages/login.php");
	exit();
}

$_SESSION["curUser"] = $uname;

header("Location: ../../pages/index.php");
exit();
