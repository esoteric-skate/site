<?php readfile("../includes/boilerplate.html"); ?>

<div class="centered">
    <div class="register">
        <label for="ruser"><b>Username</b></label>
        <input type="text" id="ruser" name="ruser" />
        <br />
        <label for="rpass"><b>Password</b></label>
        <input type="password" id="rpass" name="rpass" />
        <br />
        <button type="submit" onclick="register()" >Register</button>
    </div>
    <div class="login">
        <label for="luser"><b>Username</b></label>
        <input type="text" id="luser" name="luser" />
        <br />
        <label for="lpass"><b>Password</b></label>
        <input type="password" id="lpass" name="lpass" />
        <br />
        <button type="submit">Login</button>
    </div>
</div>

<?php readfile("../includes/footer.html"); ?>