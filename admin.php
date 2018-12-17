<?php 
function add($make,$mode,$yea,$pric,$ur){
	$db = mysqli_connect("localhost", "root", "") or die("Unable to connect to MySQL"); 
	mysqli_select_db($db,"garage");
	$results=mysqli_query($db,"INSERT INTO garage (Maker,Model,Year,Price,URL) VALUES ('$make','$mode','$yea','$pric','$ur')");
}

function check(){
$a=array();
if(isset($_POST['maker'])){
	array_push($a,$_POST['maker']);

}
if(isset($_POST['model'])){
	array_push($a,$_POST['model']);

}
if(isset($_POST['year'])){
	array_push($a,$_POST['year']);
	
}
if(isset($_POST['price'])){
	array_push($a,$_POST['price']);
	
}
if(isset($_POST['url'])){
	array_push($a,$_POST['url']);
	
}
	return $a;

}
$f=check();
if(sizeof($f)>1){
add(array_values($f)[0],array_values($f)[1],array_values($f)[2],array_values($f)[3],array_values($f)[4]);}
?>
<html>
<head>
	<style>
	form{
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: space-around;
		justify-content: center;
		align-items: center;
		width: 220px;
		
	}
	input{
		height: 20px;
	}
	</style>
</head>
<body>
	<form action="" method="post">
		<p>Maker</p><input type="text" name="maker">
		<p>Model</p><input type="text" name="model">
		<p>Year</p><input type="text" name="year">
		<p>Price</p><input type="text" name="price">
		<p>URL</p><input type="text" name="url">
		<input type="submit" value="Add new">
	</form>
</body>
</html>
