<?php

if(isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root","","form");

    $username = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

// session_start();
// $_session['email']='$email';

	
   if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    	
      $sql=mysqli_query($conn,"SELECT * FROM  register WHERE mail= '$username' and  paswrd= '$password'");
        
      
    if($result=mysqli_fetch_array($sql))
    {  
            // echo "<h1><center> Login successful </center></h1>"; 
            header("location:dash.php") ;
        }  
         else{  
             echo "<h1> Login failed. Invalid username or password.</h1>";  
         }     

	



}

?>