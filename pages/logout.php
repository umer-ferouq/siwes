<?php
	
	session_start();
	include '../config/config.php';
	
		if(isset($_SESSION['email']) or isset($_SESSION['id'])){
	
			
			session_destroy();
			session_unset();
	
			header("location: index.php");
		}else{
	
			header("location: login.php");
		}
	//		header("location: index.php?logout=$logout");
	?>