<?php
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

$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO users (user_email, user_phone, user_username, user_password) VALUES ('$email', '$phone', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo '
        <script> 
            alert("Register successfully!");
        </script>
    ';?>
    <script>setTimeout(function(){window.location ="../index.php?page=register";}, 0);</script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// header('location:../index.php?page=register');

$conn->close();

?>