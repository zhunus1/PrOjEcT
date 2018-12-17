 <html>
 <style>
 	form{
 		display: flex;
 		flex-direction: column;
 		justify-content: center;
 		align-items: center;
 		padding-top: 100px;
 	}
 	div{
 		height: 200px;
 		margin-top:150px;
 		border:3px solid orange;
 	}

 	

 </style>
 	<body>
 		<div>
 		<form action="admin.php" method="post">
 			<p>Hello Admin!</p>
 			<input type="text" name="username" placeholder="Enter your username"><br>
 			<input type="password" name="password" placeholder="Enter your password"><br>
 			<input type="submit" value="Log in">
		</form>
		</div>		
	</body>
 </html>