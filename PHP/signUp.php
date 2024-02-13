<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$db = "luana"; 

$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

 
    $sql = "INSERT INTO users (user_name, password) VALUES ('$user_name', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Registration successful!"); window.location.href = "login.html";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>



