<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "ContactList";

// Connection Created
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Checking the connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
