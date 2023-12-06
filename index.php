<?php include("./boilerplate.php"); ?>

<div class="centered">
	<img class="logo" alt="Triangle With Text \'ESOTERIC\'" src="./Images/triangle.gif" />
	<p class="greeting">Welcome To <span class="brandname">ESOTERIC</span> Skate<?php if (isset($_SESSION["curUser"])) echo ", " . $_SESSION["curUser"] ?></p>
</div>

<?php include("./footer.php"); ?>