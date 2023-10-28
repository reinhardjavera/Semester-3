<?php
session_start();
require_once('db.php');

// Data from Form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if user exists
$sql = "SELECT * FROM users2
        WHERE username = ?";
$stmt = $db->prepare($sql);
$stmt->execute([$username]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    echo "User not found";
} else {
    // Check if password correct
    echo "USERNAME ada di database<br />";
    echo "Password yang diinput di form login: " . $password;
    echo "<br />Password yang tersimpan di database: " . $row['password'];
    if (!password_verify($password, $row['password'])) {
        echo "Wrong password";
    } else {
        // Login success, set SESSION DATA
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_role'] = $row['role'];
        $_SESSION['username'] = $row['username'];
        header('location: internal.php');
    }
}
