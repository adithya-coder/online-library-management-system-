<?php
	session_start();

	require_once '../config.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
	
		$sql = "SELECT * FROM regular_user WHERE Email='$email' AND Password= '$password'";
		
		$result = $conn->query($sql);
		
		if(mysqli_num_rows($result) == 1){
			$month_seconds = 60 * 60 * 24 * 30;
			// setcookie('logged_user', $email, time() + $month_seconds, httponly: true);
			$_SESSION['logged_user'] = $email;

			header("Location:/library-management-system/index.php");
		}
		else{
			echo "<h3>Incorrect Email/Password</h3>";
		}
	}

	else {
		echo "Error!";
	}
?>
