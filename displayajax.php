
<?php

	$conn= mysqli_connect("localhost","root");
	mysqli_select_db($conn,'form');
	$query="select * from register";
	$q=mysqli_query($conn,$query);
	if(mysqli_num_rows($q)>0){
		while ($res=mysqli_fetch_array($q)) {
			?>
			<tr>
				<td><?php echo $res['userName'] ?></td>
				<td><?php echo $res['mail'] ?></td>
				<td><?php echo $res['mobileNo'] ?></td>
				<td><button  class="btn btn-warning"><a href="update.php?uname=<?php echo $res['userName']; ?>">Edit</a></button></td>
				<td><button  class="btn btn-danger"><a href="delete.php?uname=<?php echo $res['userName']; ?>">Delete</a></button></td>
			</tr>

			<?php
		}
	}

	
?>