<?php
$servername = "localhost";
$username 	= "exceed_root";
$password 	= "qwerty123.";
$dbname 	= "exceed_algemeen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>