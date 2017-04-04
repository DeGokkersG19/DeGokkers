<?php
require('db.php');

// Account Creation
$cUsername 		= $_GET['username'];
$cPassword 		= $_GET['password'];
$cPassword2 	= $_GET['password2'];
$cEmail 		= $_GET['email'];
$homeURL 		= "../index.php";
$userIP 		= $_SERVER['REMOTE_ADDR'];
$activationLink = 'http://exceed.s1.one2xs.com/verify.php';

// Email Verification
$to = $cEmail;
$subject = "Verifieer je account op SpaceRace";
$txt = "Beste $cUsername,
		U heeft zich onlangs geregistreerd op onze website. Om je account te verifiëren, klik op de onderstaande link. Het is wel belangrijk om je account van dezelfde locatie te verifiëren als de locatie waarop U zich heeft geregistreerd!

		$activationLink?user=$cUsername";
$headers = "From: $cEmail";

// Return inputs of registration form
var_dump($cUsername, $cPassword, $cPassword2, $cEmail);

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
		$sql = "INSERT INTO users (username, password, email, isValid, ip)
		VALUES ('$cUsername', '$cPassword', '". $cEmail ."', 'false', '$userIP')";

		if ($conn->query($sql) === TRUE) {
			$errorMessage = "You have succesfully registered, please verify your email!";
			mail($to,$subject,$txt,$headers);
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