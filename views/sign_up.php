<? php

echo '<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		body{background-color: lightgray;}
		form{border:1px solid black; width:300px; border-radius: 5px;
			background-color: white;}
		form input{margin:10px;}
		form button {background-color: lightgray; display: block;
    margin: 0 auto 15px auto;
    text-align: center;border-radius: 5px;}
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST" action="/controllers/sign_up.php">
		<h4 align="center">Sign Up/h4>
		<input type="text" placeholder="username" name="si_username"><br>
		<input type="text" placeholder="email address" name="si_eaddress"><br>
<input type="password" placeholder="password" name="si_password"><br>
<button script="index.php">Enter</button>
	</form>
</body>
</html>
