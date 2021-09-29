<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="alogin.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center><br><br>
    <div class="head1">
	<div class="cont1">
        <h2>Welcome To</h2>
		<h3>Admin Login Page</h3><br>
		<form class="u" action="" method="post">
			UserName: <input class="btn2" type="text" name="username" placeholder="Enter the Username" required><br><br>
			Password:&nbsp;&nbsp; <input class="btn2" type="password" name="password" placeholder="Enter the Password" required><br><br>
			<input class="btn1" type="submit" name="submit" value="LogIn">
		</form><br></div>
		
		<?php
			session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"student");
				$query = "select * from alogin where username = '$_POST[username]' and password='$_POST[password]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['username'] == $_POST['username']){
						if($row['password'] == $_POST['password']){
						
							$_SESSION['username'] =  $row['username'];
							header("Location: admin_dashboard.php");
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
		?></div>
	</center>
	<style>
	body{
    background-image: url(https://wallpaperaccess.com/full/16692.jpg) no-repeat;
    background-size: cover;
}</style>
</body>
</html>