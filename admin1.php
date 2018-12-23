<?php 
function add($make,$mode,$yea,$pric,$ur){
	$db = mysqli_connect("localhost", "root", "") or die("Unable to connect to MySQL"); 
	mysqli_select_db($db,"garage");
	$results=mysqli_query($db,"INSERT INTO garage (Maker,Model,Year,Price,URL) VALUES ('$make','$mode','$yea','$pric','$ur')");
}

function check(){
$a=array();
if(isset($_POST['maker']) and !empty($_POST['maker'])){
	array_push($a,$_POST['maker']);
}else{
	alert("Fill the Make");
}
if(isset($_POST['model']) and !empty($_POST['model'])){
	array_push($a,$_POST['model']);

}else{
	alert('Fill the Model');
}
if(isset($_POST['year']) and !empty($_POST['year'])){
	array_push($a,$_POST['year']);
	
}else{
	alert('Fill the Year');
}
if(isset($_POST['price']) and !empty($_POST['price'])){
	array_push($a,$_POST['price']);
	
}else{
	alert('Fill the Price');
}
if(isset($_POST['url']) and !empty($_POST['url'])){
	array_push($a,$_POST['url']);
	
}else{
	alert('Fill the URL');
}
	return $a;
}


$f=check();
if(sizeof($f)>1){
add(array_values($f)[0],array_values($f)[1],array_values($f)[2],array_values($f)[3],array_values($f)[4]);}
?>


		<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="admin.css">
</head>
<body>
	<form action="" method="post">
		<div class="main">
		<div class="line1"><p>Maker:</p></div>
			<div class="line2"><input type="text" name="maker" placeholder="  Enter your car's Maker"></div>
		</div>
		<div class="main">
		<div class="line1"><p>Model:</p></div>
			<div class="line2"><input type="text" name="model" placeholder="  Enter your car's Model"></div>
		</div>
		<div class="main">
		<div class="line1"><p>Year:</p></div>
			<div class="line2"><input type="text" name="year" placeholder="  Enter your car's Year"></div>
		</div>
		<div class="main">
		<div class="line1"><p>Price:</p></div>
			<div class="line2"><input type="text" name="price" placeholder="  Enter your car's Price"></div>
		</div>
		<div class="main">
		<div class="line1"><p>URL:</p></div>
			<div class="line2"><input type="text" name="url" placeholder="  Enter your car's URL"></div>
		</div>
				<input type="submit" value="Add Car" >
	</form>
	<a href="index.php">Go back!</a>

</body>
</html>

	
