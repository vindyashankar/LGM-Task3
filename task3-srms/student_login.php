<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="slogin.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center><br><br>
	<div class="head1">
		<div class="cont1">
			<h2>Welcome To</h2>
		<h3>Student Login Page</h3><br>
		<form action="" method="post">
		Student ID: &nbsp;&nbsp;&nbsp;&nbsp; <input class="btn2" type="number" name="stuid" placeholder="Enter Student ID" required><br><br>
			Student Name: <input class="btn2" type="text" name="stuname" placeholder="Enter Student Name" required><br><br>
			<input class="btn1" type="submit" name="submit" value="Login">
		</form><br>
		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"student");
				$query = "select * from addstudent where stuid = '$_POST[stuid]' and stuname='$_POST[stuname]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['stuid'] == $_POST['stuid'])
					{
						if($row['stuname'] == $_POST['stuname'])
						{
							
							$_SESSION['stuid'] =  $row['stuid'];
							header("Location: student_dashboard.php");
						}
						else{
							echo "Wrong Password";
						}
					}
                    else{
                        echo "Wrong Username";
                    }
				}
			}
		?>
	</center>
</body>
</html>