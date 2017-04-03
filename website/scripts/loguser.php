<?php
require('db.php');

// Account Creation
$cUsername = $_GET['username'];
$cPassword = $_GET['password'];
$homeURL = "../index.php";

// Return inputs of registration form
var_dump($cUsername, $cPassword, $cPassword2, $cEmail);

$sql="SELECT * FROM users WHERE username='$cUsername' and password='$cPassword' and isValid='1'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if(mysqli_num_rows($result) == 1) 
{
	$errorMessage = "You can now download Spacerace";
	header("Location: " . $homeURL . "?errorMessage=$errorMessage");
	session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
}
else 
	$errorMessage = "Invalid login credentials!";
	header("Location: " . $homeURL . "?errorMessage=$errorMessage");


$conn->close();
?>