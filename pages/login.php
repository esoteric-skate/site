<?php include("../includes/boilerplate.php");

if (isset($_SESSION["curUser"])) {
    header("Location: ../../pages/account.php");
    exit();
}

?>
<div class="form register" style="display: none;">
    <p>Username: At Least 5 Characters Long, AlphaNumeric Only!<br /><br />Password: At Least 8 Characters Long,AlphaNumeric + At Least 1 Upercase and 1 Number</p>
</div>
<div class="form register" style="display: none;">
    <form action="../includes/doRegister.php" method="post">
        <p>Register</p>
        <?php
        if (isset($_SESSION['rError'])) {
            echo "<script type=\"text/javascript\">switchForm('register');</script>";
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
        <p class="infoText" onclick="switchForm('login');">Allready Have An Account?</p>
    </form>
</div>
<div class="form login">
    <form action="../includes/doLogin.php" method="post">
        <p>Login</p>

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
        <p class="infoText" onclick="switchForm('register');">Need To Make An Account?</p>
    </form>
</div>

<?php include("../includes/footer.php"); ?>