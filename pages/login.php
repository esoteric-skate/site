<?php include("../includes/boilerplate.php") ?>

<div class="centered">
    <div class="register">
        <label for="ruser"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="ruser" required>
        <br />
        <label for="rpass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="rpass" required>
        <br />
        <button type="submit">Register</button>
    </div>
    <div class="login">
        <label for="luser"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="luser" required>
        <br />
        <label for="lpass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="lpass" required>
        <br />
        <button type="submit">Login</button>
    </div>
</div>

<?php include("../includes/footer.php") ?>