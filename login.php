<html>
<head>
	<title>Resto Online</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>Form Login</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="menu.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
</html>