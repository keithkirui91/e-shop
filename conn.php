<?php
session_start();

$db_username = "root";
$db_password = "";

// Create connection
$conn = new PDO('mysql:host=localhost;dbname=my-eshop', $db_username, $db_password);

/* Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>*/