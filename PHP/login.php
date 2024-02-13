<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "luana";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_name = $_POST['user_name'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE user_name='$user_name' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<script>alert("Login successful!"); window.location.href = "main.html";</script>';
} else {
    echo '<script>alert("Invalid user or password!"); window.location.href = "login.html";</script>';
}

$conn->close();
?>
