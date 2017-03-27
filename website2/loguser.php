<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "golife123";
$dbname = "webtest";

// Account Creation
$cUsername = $_GET['username'];
$cPassword = $_GET['password'];
$homeURL = "index.php";

// Return inputs of registration form
var_dump($cUsername, $cPassword, $cPassword2, $cEmail);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM users WHERE username='$cUsername' and password='$cPassword'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if(mysqli_num_rows($result) == 1) 
{
	$errorMessage = "Succes!";
	header("Location: " . $homeURL . "?errorMessage=$errorMessage");
}
else 
	$errorMessage = "Invalid login credentials!";
	header("Location: " . $homeURL . "?errorMessage=$errorMessage");


$conn->close();
?>