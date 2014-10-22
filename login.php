<?php
$pageName = 'register';
include_once "_inc/header.php";


?>
<form action="" method="post">
    <ul>
        <li>
            <label>Username<br>
                <input type="text" name="username" placeholder="Username">
            </label>
        </li>
        <li>
            <label>Password<br>
                <input type="password" name="password" placeholder="Password">
            </label>
        </li>
        <li>
            <input type="submit" name="login" value="Login">
        </li>
    </ul>
</form>