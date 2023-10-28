<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('location: internal.php');
}
?>

<h1>Login</h1>
<form action="login_process.php" method="post">
    <input type="text" name="username" placeholder="Username" /><br />
    <input type="password" name="password" placeholder="Password" /><br />
    <button type="submit">Login</button>
</form>