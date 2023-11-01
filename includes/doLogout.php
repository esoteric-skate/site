<?php

session_start();

if (!isset($_SESSION["curUser"])) {
    header("Location: ../../pages/index.php" );
    exit();
}
else {
    $_SESSION["curUser"] = NULL;
    header("Location: ../../pages/index.php" );
    exit();
}

?>