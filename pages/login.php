<?php readfile("../includes/boilerplate.html"); ?>

<div class="centered">
    <div class="register">
        <form action="../includes/doRegister.php" method="post">
            <label for="ruser"><b>Username</b></label>
            <input type="text" id="ruser" name="ruser" />
            <br />
            <label for="ruser"><b>Email</b></label>
            <input type="text" id="remail" name="remail" />
            <br />
            <label for="rpass"><b>Password</b></label>
            <input type="password" id="rpass" name="rpass" />
            <br />
            <?php session_start();
            if (isset($_SESSION['rError'])) {
                echo ("<p class=\"error\">" . $_SESSION['rError'] . "</p>");
            } ?>
            <button type="submit">Register</button>
        </form>
    </div>
    <div class="login">
        <form action="../includes/doLogin.php" method="post">
            <label for="luser"><b>Username</b></label>
            <input type="text" id="luser" name="luser" />
            <br />
            <label for="lpass"><b>Password</b></label>
            <input type="password" id="lpass" name="lpass" />
            <br />
            <?php
            if (isset($_SESSION['lError'])) {
                echo ("<p class=\"error\">" . $_SESSION['lError'] . "</p>");
            } ?>
            <button type="submit">Login</button>
        </form>
    </div>
</div>

<?php readfile("../includes/footer.html"); ?>