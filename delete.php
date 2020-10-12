<?php
$uname=$_GET['uname'];
	$conn= mysqli_connect("localhost","root");
	mysqli_select_db($conn,'form');
	$query="delete  from register where userName='$uname'";
	mysqli_query($conn,$query);
	header("Location:dash.php");
	?>