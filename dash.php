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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
    <h1>Dash Board</h1>
<br>
<br>
<div class="container col-6 ">
	
	<h1 class="text-center bg-dark text-white">Our Data</h1>
	<br>
	<button id="displaydata" class="btn btn-primary">Display</button>
	<table class="table table-striped table-borderd text-center">
		<thead>
			<th>User Name</th>
			<th>Email</th>
			<th>Phone No.</th>
			<th>Edit</th>
			<th>Delete</th>

		</thead>
		<tbody id="response">
			

		</tbody>


	</table>
</div>


   <div class="d-flex justify-content-center"> <button class="btn btn-primary text-white "><a class="text-white" href="logout.php">For Log oout</a></button>
  </div>
</div>
  <!-- //main -->

<script type="text/javascript">


	$('#displaydata').click(function record(){
		$.ajax({
			url:"displayajax.php",
			type:"post",
			success:function(responsedata){
				$('#response').html(responsedata);
			}
		});
	});




</script>

</body>
</html>