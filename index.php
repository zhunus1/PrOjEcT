<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="main.css">
	<script src="script.js" defer></script>
	<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","database.php",true);
        xmlhttp.send();
    }
}
</script>
<style>#txtHint{
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: space-around;
}
                      </style>
</head>
<body>
	<header>
	    
		<div class="header">
			<div id="name">
				<p>Johny's Garage</p>
			</div>
			<div class="menu">
					<ul>
						<li class="item_menu"><a class="link" href="#">About Us</a>
							<ul>
							<p>Johny's Garage is a web site of the real-world auto saloon which is located in Almaty.</p>		

							</ul>
						</li>
					</ul>
					<ul>
						<li class="item_menu"><a class="link" href="#">Contacts</a>
							<ul>
								<li><p>Jexembiyeva Karina</p><h2>Product Manager</h2><p>87010101342</p></li><br>
								<li><p>Orazov Arslan</p><h2>PR Manager</h2><p>87771232888</p></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li class="item_menu"><a class="link" href="#">Staff</a>
							<ul>
								<li><h2>Karimov Zhunus</h2><p>CEO</p></li>
								<li><h2>Orazov Arslan</h2><p>PR Manager</p></li>
								<li><h2>Jexembiyeva Karina</h2><p>Product Manager</p></li>
							</ul>
						</li>
					</ul>
					<a class="link" href="feed.php">FeedBack</a>
							
				</div>
					


				
			
		</div>
	</header>
	<section>
			<div class="view">
				<div id="text1"><h1>Добро пожаловать в Johny's Garage!</h1></div>
				<div id="text2"><p>Ниже вы можете найти свой автомобиль мечты!</p></div>
			</div>
	</section>
		<section>
			<div class="part1">
				<div class="container">
					<div class="text9">
						<p>Show all available cars!</p>
					</div>
				<form action="javascript:showUser(this.value)">
				<input type="submit">
				</form>
			</div>
			</div>
		</div>
		</section>
		<?php 
			$maker=array();
	  		$cost=array();
	  		$year=array(); 
	  		$url=array();
	  		$link= mysqli_connect("localhost","root","");
	  		mysqli_select_db($link,"garage") or die("No connection!");
	  		$sql="SELECT Model,Maker,Price,Year,URL from garage";
	  		$result = mysqli_query($link, $sql);
	 		while ($row = $result->fetch_assoc()) {
    	   		array_push($maker,$row['Maker']." ".$row["Model"]);
    	   		array_push($cost,$row['Price']);
    	   		array_push($year,$row['Year']);
    	   		array_push($url,$row['URL']);
    	   	}


		?>
	<section>
			<div id="txtHint"></div>

	</section>

	<footer>
		<div class="foot">
			<div class="opisanie">
				<p>
Johny's Garage Company
Brunnenstrasse 9 
D-72379 Hechingen	Fon: +49 (0) 7471-960 13-0 
Fax: +49 (0) 7471-960 13-13 
Mail: info@autoseredin.de	Auto Seredin Handels GmbH Administration 
Brunnenstraße 9 
D-72379 Hechingen</p>

			</div>
			<div class="rights">
				<div id="rtext">
					<h1>Johny's Garage 2018. </h1>
					<h2>All rights reserved.</h2>
					<a href="login.php">Admin page</a>
				</div>
			</div>
		</div>
		
	</footer>
</body>
</html>
