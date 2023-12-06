<?php include("./boilerplate.php");

if (isset($_SESSION["curUser"])) {
	header("Location: ./account.php");
	exit();
}

?>
<div class="form register">
	<p>Username: At Least 5 Characters Long, AlphaNumeric Only!<br /><br />Password: At Least 8 Characters Long,AlphaNumeric + At Least 1 Upercase and 1 Number</p>
</div>
<div class="form register">
	<form action="./doRegister.php" method="post" required="true">
		<p>Register</p>
		<label for="ruser"><b>Username</b></label>
		<input type="text" id="ruser" name="ruser" required="true"/>
		<br />
		<label for="ruser"><b>Email</b></label>
		<input type="text" id="remail" name="remail" required="true"/>
		<br />
		<label for="rpass"><b>Password</b></label>
		<input type="password" id="rpass" name="rpass" required="true"/>
		<br />
		<button type="submit">Register</button>
		<a class="infoText" href="./login.php">Already Have An Account?</a>
	</form>
</div>

<?php include("./footer.php"); ?>