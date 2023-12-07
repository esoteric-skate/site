<?php include("./boilerplate.php");

if (isset($_SESSION["curUser"])) {
	header("Location: ./account.php");
	exit();
}

?>
<div class="form register">
	<p>Username: At Least 5 Characters Long, AlphaNumeric Only!<br /><br />Password: At Least 8 Characters
		Long,AlphaNumeric + At Least 1 Upercase and 1 Number</p>
</div>
<div class="form register">
	<form action="./doRegister.php" method="post" onsubmit="return checkBlanks()">
		<p>Register</p>
		<?php
		if (isset($_SESSION['rError'])) {
			echo ("<p class=\"error\">" . $_SESSION['rError'] . "</p>");
		}
		?>
		<div>
			<label><b>First Name</b></label>
			<input type="text" onkeydown="isEmpty()" />
			<br />
			<label><b>Last Name</b></label>
			<input type="text" onkeydown="isEmpty()" />
			<br />
			<label for="ruser"><b>Username</b></label>
			<input type="text" id="ruser" name="ruser" onkeydown="isEmpty()" />
			<br />
			<label for="ruser"><b>Email</b></label>
			<input type="text" id="remail" name="remail" onkeydown="isEmpty()" />
			<br />
			<label for="rpass"><b>Password</b></label>
			<input type="password" id="rpass" name="rpass" onkeydown="isEmpty()" />
			<br />
			<button type="submit">Register</button>
			<a class="infoText" href="./login.php">Already Have An Account?</a>
		</div>
	</form>
</div>

<?php include("./footer.php"); ?>
