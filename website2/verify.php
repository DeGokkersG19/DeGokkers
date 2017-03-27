<?php
// Database details
$servername = "localhost";
$username = "exceed_root";
$password = "qwerty123.";
$dbname = "exceed_algemeen";
$homeURL = 'index.php';

// User details
$cIP = $_SERVER['REMOTE_ADDR'];
$cUsername = $_GET['user'];

// Database connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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