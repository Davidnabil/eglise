<?php
$servername = "localhost";
$username = "David";
$password = "05052001";
$db = "eglise";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>