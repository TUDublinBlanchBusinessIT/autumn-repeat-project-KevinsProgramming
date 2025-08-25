<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ContactList";
$port = 3307;

date_default_timezone_set('Europe/Dublin');

// Creating the connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Checking the connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
