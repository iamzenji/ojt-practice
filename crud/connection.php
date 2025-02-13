<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ojt";
$port = 3307;

//connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection f ailed: " . $conn->connect_error);
}
// echo "Connected successfully";
