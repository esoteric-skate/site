<?php include("../includes/boilerplate.php"); 

if (isset($_SESSION["curUser"])) {
    header("Location: ../../pages/account.php" );
    exit();
}

?>

<div class="centered">
    <div class="register">
        <pre>Username: At Least 5 Characters Long,<br />AlphaNumeric Only!<br />Password: At Least 8 Characters Long,<br /> AlphaNumeric + At Least 1 <br />Upercase and 1 Number</pre>
    </div>
    <div class="register">
        <form action="../includes/doRegister.php" method="post">
            <?php
                if (isset($_SESSION['rError'])) {
                    echo ("<p class=\"error\">" . $_SESSION['rError'] . "</p>");
                } 
            ?>
            <label for="ruser"><b>Username</b></label>
            <input type="text" id="ruser" name="ruser" />
            <br />
            <label for="ruser"><b>Email</b></label>
            <input type="text" id="remail" name="remail" />
            <br />
            <label for="rpass"><b>Password</b></label>
            <input type="password" id="rpass" name="rpass" />
            <br />
            <button type="submit">Register</button>
        </form>
    </div>
    <div class="login">
        <form action="../includes/doLogin.php" method="post">
            <?php
                if (isset($_SESSION['lError'])) {
                    echo ("<p class=\"error\">" . $_SESSION['lError'] . "</p>");
                } 
            ?>
            <label for="luser"><b>Username</b></label>
            <input type="text" id="luser" name="luser" />
            <br />
            <label for="lpass"><b>Password</b></label>
            <input type="password" id="lpass" name="lpass" />
            <br />
            <button type="submit">Login</button>
        </form>
    </div>
</div>

<?php include("../includes/footer.php"); ?>