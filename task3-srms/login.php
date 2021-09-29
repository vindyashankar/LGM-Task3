<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<center><br><br>
	<div class="head">
	<div class="cont">
	<h3>Student Result Management System</h3><br>
	
	<form action="" method="POST">
		
		<input class="btn" type="submit" name="admin_login" value="Admin Login" required><br><br><br><br>
		<input class="btn" type="submit" name="student_login" value="Student Login" required>
	</form></div>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?></div>
	</center>
	
</body>
</html>