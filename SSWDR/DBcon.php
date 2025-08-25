<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "sswdr";

// Connection Created
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking the connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
