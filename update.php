<?php
$conn= mysqli_connect("localhost","root");
	mysqli_select_db($conn,'form');
	if(isset($_POST['submit'])){

$uname=$_GET['uname'];


		$email = $_POST['email'];
	 $mobno = $_POST['mobno'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$cnpassword = $_POST['cnpassword'];


	
	$query="update register set mail='$email',mobileNo=$mobno,address='$address',paswrd='$password',cnfrPaswrd='$cnpassword' where userName='$uname'";

	mysqli_query($conn,$query);

	header("Location:dash.php");

	}

?>
<!DOCTYPE html>
<html>
<head>

<script src="jquery-3.5.1.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="main.js"></script>

<title>SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 --><!-- Custom Theme files -->
<link href="Register.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->

<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>


</head>
<body>
  <!-- main -->
  <div class="main-w3layouts wrapper">
    <h1>Update Form</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
       
        <form method="POST" >
         

         
          <input class="text email" type="email" id="email" name="email"  maxlength="30" placeholder="Email" required="">
           <input class="email" type="number" name="mobno" id="mob" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value=this.value.slice(0, this.maxLength);" placeholder="Mobile No" required="">
           
            <input class="text email" type="text" name="address" id="add" placeholder="address" maxlength="30" required="">
          <input class="text" type="password" name="password" maxlength="20" id="password"placeholder="Password" required="">
          <input class="text w3lpass" type="password" name="cnpassword" id="conpass" maxlength="20" placeholder="Confirm Password" required="">

          <div class="wthree-text">
            
        <!--      <div class="clear"> </div>
          </div> -->
          <input type="submit" name="submit">
        </form>
       
      </div>
    </div>

    
  </div>
  <!-- //main -->

</body>
</html>