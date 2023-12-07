<?php include("./boilerplate.php");

if (isset($_SESSION["curUser"])) {
	header("Location: ./account.php");
	exit();
}

?>
<div class="form login">
	<form action="./doLogin.php" method="post">
		<p>Login</p>
		<?php
		if (isset($_SESSION['lError'])) {
			echo ("<p class=\"error\">" . $_SESSION['lError'] . "</p>");
			echo ("<style>.red {visibility: visible;}</style>");
		}
		?>
		<div>
			<label for="luser"><b>Username</b></label>
			<input type="text" id="luser" name="luser" required="true" />
			<br />
			<label for="lpass"><b>Password</b></label>
			<input type="password" id="lpass" name="lpass" required="true" />
			<br />
			<button type="submit">Login</button>
			<a class="infoText" href="./register.php">Need To Make An Account?</a>
		</div>
	</form>
</div>

<?php include("./footer.php"); ?>
