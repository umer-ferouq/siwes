<?php 
// this code is for redirecting to different pages if the credentials are correct.
   session_start();
   include '../config/config.php';
   $link = "";
   if (isset($_SESSION['email']) && isset($_SESSION['id'])) {   
         //admin
      	if ($_SESSION['role'] == 'Admin'){
			header("Location: admin.php");
			// $link =
		    // '<li><a href="coordinator.php">Dashboard</a></li>
			// <li><a href="states.php">State Analytics</a></li>
			// <li><a href="createstate.php">Create State</a></li>
			// <li><a href="registercoordinator.php">Register Coordinator</a></li>
			// <li><a href="blog.php">Blog</a></li>
			// <li><a href="logout.php">Logout</a></li>';
      	 }
      	else if ($_SESSION['role'] == '2'){
			header("Location: staff.php");
			
      	 }
		 //
		 else if ($_SESSION['role'] == 'Institution'){ 
			 
			header("Location: institution.php");
      	} 
		 //
		 else if ($_SESSION['role'] == 'Industry'){ 
			
			header("Location: industry.php");
      	} 
		//student
		  else if ($_SESSION['role'] == 'Staff'){ 
			
			header("Location: staff.php");
		}
	
		else if ($_SESSION['role'] == 'Student'){ 
			$link = '<li><a href="wardcoordinator.php">Dashboard</a></li>
			<li><a href="addvolunteer.php">Create Volunteers</a></li>
			<li><a href="blog.php">Blog</a></li>
			<li><a href="logout.php">Logout</a></li>';
			header("Location: student.php");
		}
		$_SESSION['link'] = $link;
 }
else{
	header("Location:logout.php");
} ?>