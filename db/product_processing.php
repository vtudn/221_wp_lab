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

$name = $_POST['name'];
$details = $_POST['details'];
$num = $_POST['num'];
$sql = "INSERT INTO products (product_name, product_details, product_num) VALUES ('$name', '$details', '$num')";

if ($conn->query($sql) === TRUE) {
    echo "Item added to cart!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('location:../index.php?page=products');

$conn->close();

?>