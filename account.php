<?php include("./boilerplate.php");

if (!isset($_SESSION["curUser"])) {
	header("Location: ./login.php");
	exit();
}

?>

<div class="centered">
	<div class="form">
		<p>Account</p>
		<p>User: <?php echo ($_SESSION["curUser"]); ?></p>
		<p>Reward Points: <?php echo ord(($_SESSION["curUser"])); ?></p>
		<form action="./doLogout.php" method="post">
			<button>Logout</buton>
		</form>
	</div>
</div>

<?php include("./footer.php"); ?>
