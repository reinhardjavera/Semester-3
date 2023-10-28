<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['user_id']) && !isset($_SESSION['user_role'])) {
    echo "You do not have access to this page.";
} else {
    if ($_SESSION['user_role'] == "lecturer") {
        echo "Welcome lecturer " . $_SESSION['username'] . "!";
    } elseif ($_SESSION['user_role'] == "student") {
        echo "Welcome student " . $_SESSION['username'] . "!";
    }
}

if (!isset($_SESSION['user_id'])) {
?>
    <a href="login.php">Login</a>
<?php
} else {
?>
    <a href="logout.php">Logout</a>
<?php
}
