<?php 
	session_start();
	$db_register = mysqli_connect('localhost', 'root', '', 'newsletter');
	// to connect your database name, name newsletter and host should be localhost, username should be root and leave password blank

	// initialize variables
	$name = "";
	$email = "";	

	if (isset($_POST['submit'])) {
	
		$name = $_POST['name'];
		$email = $_POST['mail'];

		$insert_newsletter = "INSERT INTO tb_emails (name, email) VALUES ('$name', '$email')";

		if($db_register->query($insert_newsletter) === TRUE) {
			$_SESSION['message'] = "You Have Subscribe Successfully"; 
			header('location: index.php?error=0');
		} else {
			$_SESSION['message'] = "Oops!!! You Are Unable To Subscribe Try Again Later :)"; 
			header('location: index.php?error=1');
		}
		
	}

?> 