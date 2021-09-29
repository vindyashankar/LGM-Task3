<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"student");
	$query = "update addstudent set stuname='$_POST[stuname]',gender='$_POST[gender]',class='$_POST[class]',num='$_POST[num]',dob='$_POST[dob]',math='$_POST[math]',sci='$_POST[sci]',social='$_POST[social]',sans='$_POST[sans]',eng='$_POST[eng]',marks='$_POST[marks]',grade='$_POST[grade]' where stuid = $_POST[stuid]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin_dashboard.php";
</script>
