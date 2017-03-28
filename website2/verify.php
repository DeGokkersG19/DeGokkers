<?php
require('scripts/db.php');

// User details
$cIP = $_SERVER['REMOTE_ADDR'];
$cUsername = $_GET['user'];
$homeURL = '../index.php';

$query = "SELECT * from users where username ='$cUsername' AND ip ='$cIP'";
	if ($result=mysqli_query($conn,$query)) {
		if(mysqli_num_rows($result) <= 0) {
			echo "User could not be found\r";
			echo "Username: $cUsername\rIP: $cIP";
			exit();
		}
	else
		$sql = "UPDATE users
				SET isValid = '1'
				WHERE username = '$cUsername';";
		if ($conn->query($sql) === TRUE) {
			 $errorMessage = "User succesfully activated! You may now download Spacerace";
			 header("Location: " . $homeURL . "?errorMessage=$errorMessage");
		} else {
			echo "Whoops... There went something wrong: " . $conn->error;
		}
	}
	else
    echo "Could not search for username, please contact us!";
?>