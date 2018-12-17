<?php 
	$username=$_POST['username'];
	$password=$_POST['password'];
	$admins=array();
	$sql = "SELECT USERNAME,PASSWORD,ADMIN FROM system"; 
	$connection = mysqli_connect('localhost','root','') or die("Error!");
	mysqli_select_db($connection,'system') or die('Eroor');  
	$result = mysqli_query($connection,$sql);  
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		if($row['ADMIN']==1){
			array_push($admins,[$row['USERNAME'],$row['PASSWORD']]);
		}
	}
	if(in_array([$username,$password],$admins)){
		echo"Welcome Admin!";
		echo"Which object do you want to delete by ID from 'Cars' Database?";
		?>
		<form action="task32.php" method="post">
			<input type="text" name="id" placeholder="Objects ID to delete">
			<input type="submit" value="Delete!">
		</form>
		<img src="https://pp.userapi.com/c845123/v845123345/13a16d/_J4Mk0CTNhs.jpg" alt="">
<?php 
	}else{
		echo"No access";
		?>
		<br>
		<a href="task3.php">Go back to AUTHORIZATION Page</a>

		<?php 
	}
    


	//<a href="task3.php">Go back!</a>
 ?>