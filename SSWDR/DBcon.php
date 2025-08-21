<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GymMembership";
$port = 3307;

date_default_timezone_set('Europe/Dublin');

// Creating the connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);


