<?php include("../includes/boilerplate.php") ?>

<div class="centered">
    <div class="register">
        <label for="ruser"><b>Username</b></label>
        <input type="text" name="ruser" />
        <br />
        <label for="rpass"><b>Password</b></label>
        <input type="password" name="rpass" />
        <br />
        <button type="submit">Register</button>
    </div>
    <div class="login">
        <label for="luser"><b>Username</b></label>
        <input type="text" name="luser" />
        <br />
        <label for="lpass"><b>Password</b></label>
        <input type="password" name="lpass" />
        <br />
        <button type="submit">Login</button>
    </div>
</div>

<?php include("../includes/footer.php") ?>