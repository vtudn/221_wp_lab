<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wp_lab_newdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT user_username, user_password FROM users WHERE user_username='$username' and user_password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    setcookie('username', $username, time() + (86400 * 30), "/");
    setcookie('password', $password, time() + (86400 * 30), "/");
    header('Location:../index.php?page=welcome');
} else {
    echo '
        <script> 
            alert("Login failed! Incorrect password.");
        </script>
    ';?>
    <script>setTimeout(function(){window.location ="../index.php?page=login";}, 0);</script>
    <?php
}

$conn->close();
