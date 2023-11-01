<?php include("../includes/boilerplate.php"); 

if (!isset($_SESSION["curUser"])) {
    header("Location: ../../pages/login.php" );
    exit();
}

?>

<div class="centered">
    <div class="register">
        <p>Account:</p>
        <form action="../includes/doLogout.php" method="post">
            <button>Logout</buton>
        </form>
    </div>
</div>

<?php readfile("../includes/footer.html"); ?>