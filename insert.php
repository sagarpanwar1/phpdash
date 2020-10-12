<?php

 if(isset($_POST['submit']))
{	 
	 $Username = $_POST['Username'];
	 $email = $_POST['email'];
	 $mobno = $_POST['mobno'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$cnpassword = $_POST['cnpassword'];


	$conn= mysqli_connect("localhost","root","","form");
	// mysqli_select_db("form");
	 $sql = "INSERT INTO register (userName,mail,mobileNo,address,paswrd,cnfrPaswrd)
	 VALUES ('$Username','$email','$mobno','$address','$password','$cnpassword')";
	 
	 if (mysqli_query($conn, $sql)) {

		echo "New record created successfully !";
		header("location:login.html");

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
// header("location:Register.html");
	 }
	 mysqli_close($conn);
}

?>