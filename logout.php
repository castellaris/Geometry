<?php
	if(!isset($_SESSION)) {
		session_start();
	}
	unset($_SESSION['session_login']);
	session_destroy();
	header("location: index.php");
?>