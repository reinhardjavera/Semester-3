<?php
require_once('db.php');

// Data from Form
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Encrypt the Password
$en_pass = password_hash($password, PASSWORD_BCRYPT);

// 2. SQL Query
$sql = "INSERT INTO users2 (username, password, role) VALUES(?, ?, ?)";

// 3 Execute Query
$result = $db->prepare($sql);
$result->execute([$username, $en_pass, $role]);

// Redirect to Login Page
header('location: login.php');
