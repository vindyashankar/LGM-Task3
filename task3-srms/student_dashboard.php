<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="sdash.css">
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"student");
	?>
</head>
<body>
	<div id="header"><br>
		<center>Student Result Portal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button><a href="logout.php">Logout</a></button>
		</center>
	</div>
	
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
		<div class="container">
			<table>
				
				<tr>
                    
					
						<input class="btn" type="submit" name="search_student" value="Click Here">
					
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
					<input class="btn1" type="submit" name="search_by_stuid_for_search" value="Get Result">
					</form><br><br>
					<h5><b>All The Best for your Results!!</b></h5><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_stuid_for_search']))
				{
					$query = "select * from addstudent where stuid = '$_POST[stuid]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?><center>
						<div class="main2">
            <table>
                <thead>
                  <tr>
                    <td> S.No</td>
                    <td colspan="10">Subjects </td>
                    <td rowspan="2"> Obtained Marks </td>
                  </tr>   
                </thead>
                <tbody>
                  <tr>
                    <td> 1 </td>
                    <td colspan="10">Mathematics </td>
                    <td> <?php echo '<p>'.$row['math'].' / 100</p>';?> </td>
                  </tr>
                
                  <tr>
                    <td> 2 </td>
                    <td colspan="10">Science </td>
                    <td> <?php echo '<p>'.$row['sci'].' / 100</p>';?></td>
                  </tr>
            
                  <tr>
                    <td> 3 </td>
                    <td colspan="10">Social Science </td>
                    <td> <?php echo '<p>'.$row['social'].' / 100</p>';?> </td>
                  </tr>
            
                  <tr>
                    <td> 4 </td>
                    <td colspan="10">Sanskrit </td>
                    <td> <?php echo '<p>'.$row['sans'].' / 100</p>';?> </td>
                  </tr>
            
                  <tr>
                    <td> 5 </td>
                    <td colspan="10">English </td>
                    <td> <?php echo '<p>'.$row['eng'].' / 100</p>';?> </td>
                  </tr>
                </tbody>
            
                
                <tfoot>
                    
                    <tr>
                    <td>#</td>
                    <td colspan="10" class="footer">Total Marks Obtained</td>
                    <td colspan="2"> <?php echo $row['marks'];?> / 500 </td>
                    </tr>
                    
                    <tr>
                    <td colspan="10" class="footer">Grade</td>
                    <td colspan="2"><?php echo $row['grade'];?> </td>
                    </tr>

                    <tr>
                        <td colspan="10" class="footer">Student Name</td>
                        <td colspan="2"><?php echo $row['stuname'];?> </td>
                        </tr>

                    <tr>
                        <td colspan="10" class="footer">Class</td>
                        <td colspan="2"><?php echo $row['class'];?> </td>
                        </tr>
                
                        <tr>
                        <td colspan="10" class="footer">Student ID</td>
                        <td colspan="2"><?php echo $row['stuid'];?> </td>
                        </tr>
                </tfoot>
              </table>

             
              </div>
        </div>
    </div>
						<?php
					}
				}
			?>

			
		</div>
	</div>
</body>
</html>