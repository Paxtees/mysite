<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$login = $_POST['login'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE login='$login' AND pass='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: ../indexxx.php");
    exit();
} else {
    echo "Такой пользователь не найден";
    header("refresh:3;url=../index.php"); 
    exit();
}

$conn->close();
?>