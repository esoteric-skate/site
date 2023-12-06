<?php

session_start();

if (!isset($_SESSION["curUser"])) {
	header("Location: ./index.php");
	exit();
} else {
	$_SESSION["curUser"] = NULL;
	header("Location: ./index.php");
	exit();
}
