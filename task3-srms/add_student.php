<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"student");
	$query = "insert into addstudent values($_POST[stuid],'$_POST[stuname]','$_POST[gender]',$_POST[class],'$_POST[num]','$_POST[dob]','$_POST[math]','$_POST[sci]','$_POST[social]','$_POST[sans]','$_POST[eng]','$_POST[marks]','$_POST[grade]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student Details inserted successfully.");
	window.location.href = "admin_dashboard.php";
</script>
