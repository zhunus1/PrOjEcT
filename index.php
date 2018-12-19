<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="main.css">
	<script src="script.js" defer></script>
</head>
<body>
	<header>
	    
		<div class="header">
			<div id="name">
				<p>Johny's Garage</p>
			</div>
			<div id="links">
				<nav>
					<a href="">About us</a>
					<a href="">Contacts</a>
					<a href="">Personal</a>
					<a href="">FeedBack</a>
				</nav>
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
				<div class="line1">
					<div class="text">
						<h1>Искать автомобиль по:</h1>
					</div>
					<div class="types">
						<button id="par1" value="true" onclick="price()">Цене и году выпуска</button>
						<button id="par2" value="true" onclick="parametr()">По всем параметрам</button>
				</div>
				</div>
					<div class="line2">
						<div id="brands">
							<div id="mark">
								<p>Выберите марку:</p>
								<select id="brandy"><option>Choose</option></select>
							</div>
							<div id="model">
								<p>Выберите модель:</p>
								<select id="modeli"><option>Choose</option></select>
							</div>
						</div>
						<div id="blocks">
						<div id="price">
							<p>Цена:</p>
							<div id="line1">
								<input type="text" name="price1" placeholder=" от">
								<input type="text" name="price2" placeholder=" до">
							</div>
						</div>
						<div id="year">
							<p>Год выпуска:</p>
							<div id="line2">
								<input type="text" name="year" placeholder=" от">
								<input type="text" name="year" placeholder=" до">
							</div>
						</div>
						</div>
					</div>
				<div class="find">
				<button>Искать!</button>
			</div>
			</div>
		</div>
		</section>
		
	<section>
		<div class="cards">
			

		</div>

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