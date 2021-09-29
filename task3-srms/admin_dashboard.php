<!DOCTYPE html>
<html>
<head>
	
	<title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="dash.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"student");
	?>
</head>
<body>
	<div id="header"><br>
		<center>Admin Dashboard &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
		<button><a href="logout.php">Logout</a></button> </center>
		
	</div>
   

  

	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
            <div id="container">
			<table>
				<tr>
					<td>
						<input class="btn" type="submit" name="search_student" value="Search Student">
					</td>
				</tr>
				<tr>
					<td>
						<input class="btn" type="submit" name="edit_student" value="Edit Student">
					</td>
				</tr>
				<tr>
					<td>
						<input class="btn" type="submit" name="add_new_student" value="Add New Student">
					</td>
				</tr>
				<tr>
					<td>
						<input class="btn" type="submit" name="delete_student" value="Delete Student">
					</td>
				</tr>
				
			</table>
</div>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
					<form class="edit" action="" method="post">
					&nbsp;&nbsp;<b>Enter Student ID:</b>&nbsp;&nbsp; <input class="btn2" placeholder="Student ID" type="text" name="stuid">
					<input class="btn1" type="submit" name="search_by_stuid_for_search" value="Search">
					</form><br><br>
					<h4><b><u>Student's details</u></b></h4><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_stuid_for_search']))
				{
					$query = "select * from addstudent where stuid = '$_POST[stuid]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?><center><h5>The Student Details are:</h5></center><center>
						<table>
							<tr>
								<td>
									<b>Student ID:</b>
								</td> 
								<td>
									<input class="btn5" type="number" value="<?php echo $row['stuid']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Student Name:</b>
								</td> 
								<td>
									<input class="btn5" type="text" value="<?php echo $row['stuname']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Gender:</b>
								</td> 
								<td>
									<input class="btn5" type="text" value="<?php echo $row['gender']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Class:</b>
								</td> 
								<td>
									<input class="btn5" type="text" value="<?php echo $row['class']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile Number:</b>
								</td> 
								<td>
									<input class="btn5" type="number" value="<?php echo $row['num']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>DOB:</b>
								</td> 
								<td>
									<input class="btn5" type="date" value="<?php echo $row['dob']?>" disabled>
								</td>
							</tr>
                    </table></center><center><h5>The Student Marks are:</h5></center><center><table>
							<tr>
								<td>
									<b>Mathematics:</b>
								</td> 
								<td>
									<input class="btn5" type="number" value="<?php echo $row['math']?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>Science:</b>
								</td> 
								<td>
									<input class="btn5" type="number" value="<?php echo $row['sci']?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>Social Science:</b>
								</td> 
								<td>
									<input class="btn5" type="number" value="<?php echo $row['social']?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>Sanskrit:</b>
								</td> 
								<td>
									<input class="btn5" type="number" value="<?php echo $row['sans']?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>English:</b>
								</td> 
								<td>
									<input class="btn5" type="number" value="<?php echo $row['eng']?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>Marks:</b>
								</td> 
								<td>
									<input class="btn5" type="number" value="<?php echo $row['marks']?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>Grade:</b>
								</td> 
								<td>
									<input class="btn5" type="text" value="<?php echo $row['grade']?>" disabled>
								</td>
							</tr>
							
						</table></center>
						<?php
					}
				}
			?>
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form class="edit" action="" method="post">
				&nbsp;&nbsp;<b>Enter Student ID:</b>&nbsp;&nbsp; <input class="btn2" type="text" placeholder="Student ID" name="stuid">
				<input class="btn1" type="submit" name="search_by_stuid_for_edit"  value="Search">
				</form><br><br>
				<h4><b><u>Student's details</u></b></h4><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_stuid_for_edit']))
			{
				$query = "select * from addstudent where stuid = $_POST[stuid]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
                    
                <center><h4>Modify the Student Details for any changes:</h4></center>
					<form class="add" action="admin_edit_student.php" method="post">
						<center><table>
						<tr>
							<td>
								<b>Student ID:</b>
							</td> 
							<td>
								<input class="btn3" type="number" name="stuid" value="<?php echo $row['stuid']?>">
							</td>
						</tr>
						<tr>
								<td>
									<b>Student Name:</b>
								</td> 
								<td>
									<input class="btn3" type="text" name="stuname" value="<?php echo $row['stuname']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Gender:</b>
								</td> 
								<td>
									<input class="btn3" type="text" name="gender" value="<?php echo $row['gender']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Class:</b>
								</td> 
								<td>
									<input class="btn3" type="text" name="class" value="<?php echo $row['class']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile Number:</b>
								</td> 
								<td>
									<input class="btn3" type="number" name="num" value="<?php echo $row['num']?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>DOB:</b>
								</td> 
								<td>
									<input class="btn3" type="date" name="dob" value="<?php echo $row['dob']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Mathematics:</b>
								</td> 
								<td>
									<input class="btn3" type="number" name="math" value="<?php echo $row['math']?>">
								</td>
							</tr>
                            <tr>
								<td>
									<b>Science:</b>
								</td> 
								<td>
									<input class="btn3" type="number" name="sci"  value="<?php echo $row['sci']?>" >
								</td>
							</tr>
                            <tr>
								<td>
									<b>Social Science:</b>
								</td> 
								<td>
									<input class="btn3" type="number" name="social" value="<?php echo $row['social']?>" >
								</td>
							</tr>
                            <tr>
								<td>
									<b>Sanskrit:</b>
								</td> 
								<td>
									<input class="btn3" type="number" name="sans" value="<?php echo $row['sans']?>" >
								</td>
							</tr>
                            <tr>
								<td>
									<b>English:</b>
								</td> 
								<td>
									<input class="btn3" type="number" name="eng" value="<?php echo $row['eng']?>" >
								</td>
							</tr>
                            <tr>
								<td>
									<b>Marks:</b>
								</td> 
								<td>
									<input class="btn3" type="number" name="marks" value="<?php echo $row['marks']?>" >
								</td>
							</tr>
                            <tr>
								<td>
									<b>Grade:</b>
								</td> 
								<td>
									<input class="btn3" type="text" name="grade" value="<?php echo $row['grade']?>" >
								</td>
							</tr>
						<tr>
							<td></td>
							<td>
								<input class="btn4" type="submit"  name="edit" value="Save">
							</td>
						</tr>
					</table></center>
					</form>
					<?php
				}
			}
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form class="del" action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Student ID:</b>&nbsp;&nbsp;
                 <input class="btn2" type="text" name="stuid" placeholder="Student ID">
				<input class="btn1" type="submit" name="search_by_stuid_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4>Enter the Student Details:</h4></center>
					<form class="add" action="add_student.php" method="post">
						<center><table>
						<tr>
							<td>
								<b>Student ID:</b>
							</td> 
							<td>
								<input class="btn3" type="number" name="stuid" placeholder="Enter Student ID" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Student Name:</b>
							</td> 
							<td>
								<input class="btn3" type="text" name="stuname" placeholder="Enter Student Name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Gender:</b>
							</td> 
							<td>
								<input class="btn3" type="text" name="gender" placeholder="Enter Gender" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input class="btn3" type="text" name="class" placeholder="Enter the Class" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile Number:</b>
							</td> 
							<td>
								<input class="btn3" type="number" name="num" placeholder="Enter Mobile Number" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>DOB:</b>
							</td> 
							<td>
								<input class="btn3" type="date" name="dob" placeholder="Enter DOB" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mathematics:</b>
							</td> 
							<td>
								<input class="btn3" type="number" name="math" placeholder="Enter Marks" required>
							</td>
						</tr>
                        <tr>
							<td>
								<b>Science:</b>
							</td> 
							<td>
								<input class="btn3" type="number" name="sci" placeholder="Enter Marks" required>
							</td>
						</tr>
                        <tr>
							<td>
								<b>Social Science:</b>
							</td> 
							<td>
								<input class="btn3" type="number" name="social" placeholder="Enter Marks" required>
							</td>
						</tr>
                        <tr>
							<td>
								<b>Sanskrit:</b>
							</td> 
							<td>
								<input class="btn3" type="number" name="sans" placeholder="Enter Marks" required>
							</td>
						</tr>
                        <tr>
							<td>
								<b>English:</b>
							</td> 
							<td>
								<input class="btn3" type="number" name="eng" placeholder="Enter Marks " required>
							</td>
						</tr>
                        <tr>
							<td>
								<b>Marks:</b>
							</td> 
							<td>
								<input class="btn3" type="number" name="marks" placeholder="Enter the Total Marks" required>
							</td>
						</tr>
                        <tr>
							<td>
								<b>Grade:</b>
							</td> 
							<td>
								<input class="btn3" type="text" name="grade" placeholder="Enter the Grade" required>
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td><br><input class="btn4" type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
                </center>
					</form>
					<?php
				}
			?>
			
		</div>
	</div>
	

</body>
</html>