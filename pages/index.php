<?php include("../includes/boilerplate.php"); ?>

<div class="centered">
    <img class="logo" alt="Triangle With Text \'ESOTERIC\'" src="../assets/images/triangle.png" />
    <p class="greeting">Welcome To <span class="brandname">ESOTERIC</span> Skate<?php if (isset($_SESSION["curUser"])) echo ", " . $_SESSION["curUser"] ?></p>
</div>

<?php readfile("../includes/footer.html"); ?>