<form action="<?php echo base_url('home/handle_login') ?>" method="POST">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="password">Password</label>
    <input type="text" id="password" name="password">

    <input type="submit" value="Login">
</form>