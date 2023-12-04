<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>「 ESOTERIC 」</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="スケート" />
	<meta name="theme-color" content="#ba90ee" />
	<link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico" />
	<link rel="stylesheet" href="../styles/style.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<script defer="defer" type="text/javascript" src="../scripts/index.js"></script>
	<style type="text/css">
		.content {
			opacity: 0;
		}
	</style>
</head>

<body>
	<div class="header" id="header">
		<a class="menuLogo" href="./">「 <span class="purple">ESOTERIC</span> 」</a>
		<?php
		session_start();
		if (!isset($_SESSION["curUser"])) {
			echo "<a href=\"login.php\">「 SIGN IN 」</a>";
		} else {
			echo "<a href=\"account.php\">「 ACCOUNT 」</a>";
		}
		?>
		<a href="about.php">「 ABOUT US 」</a>
		<a href="drops.php">「 DROPS 」</a>
		<a class="menuButton" onclick="toggleMenu()">&#9776;</a>
	</div>
	<div class="content" id="content">