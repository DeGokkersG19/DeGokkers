<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "webtest";

// Account Creation
$cUsername = $_GET['username'];
$cPassword = $_GET['password'];
$cPassword2 = $_GET['password2'];
$cEmail = $_GET['email'];
$homeURL = "index.php";

// Return inputs of registration form
var_dump($cUsername, $cPassword, $cPassword2, $cEmail);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * from users where username ='$cUsername'";
	if ($result=mysqli_query($conn,$query)) {
		if(mysqli_num_rows($result) > 0) {
			$usernameMessage = "Username already exists";
			header("Location: " . $homeURL . "?usernameMessage=$usernameMessage");
			$isAvailable = false;
			exit();
		}
	else
		$isAvailable = true;
	}
	else
    $usernameMessage = "Could not search for username, please contact us!";

if (isset($cUsername) && ($isAvailable) && filter_var($cEmail, FILTER_VALIDATE_EMAIL) && ($cPassword == $cPassword2)) {
		$sql = "INSERT INTO users (username, password, email)
		VALUES ('$cUsername', '$cPassword', '". $cEmail ."')";

		if ($conn->query($sql) === TRUE) {
			$errorMessage = "You have succesfully created a account, you can now log in!";
			if (isset($usernameMessage))
			{
				header("Location: " . $homeURL . "?usernameMessage=$usernameMessage");
				exit();
			}
			if (isset($errorMessage))
			{
				header("Location: " . $homeURL . "?errorMessage=$errorMessage");
				exit();
			}
			if (isset($usernameMessage) && (isset($errorMessage))) 
			{
				header("Location: " . $homeURL . "?usernameMessage=$usernameMessage&errorMessage=$errorMessage");
				exit();
			}

		} else {
			$errorMessage = "Error: " . $sql . "<br>" . $conn->error;
			header("Location: " . $homeURL . "?errorMessage=$errorMessage");
			exit();
		}
	}
	elseif ($cPassword != $cPassword2)
	{
		$errorMessage = "The passwords do not match!";
		header("Location: " . $homeURL . "?errorMessage=$errorMessage");
	}


$conn->close();
?>