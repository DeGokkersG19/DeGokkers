<?php
$servername = "localhost";
$username = "exceed_root";
$password = "qwerty123.";
$dbname = "exceed_algemeen";

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