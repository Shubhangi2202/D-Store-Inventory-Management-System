<?php
	session_start();
	
	unset($_SESSION['loggedIn']);
	unset($_SESSION['fullName']);
	session_destroy();

	setcookie('emailcookie', ' ', time() - 86400);
	setcookie('passwordcookie', ' ', time() - 86400);

	header('Location: ../../login.php');
	exit();
?>