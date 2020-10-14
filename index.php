/*<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		body{background-color: lightgray;}
		form{border:1px solid black; width:300px; border-radius: 5px;
			background-color: white;}
			form h4 a{text-decoration: none;}
form h4 a:link{ color:black; }
form h4 a:visited{ color:black; }
form h4 a:hover{ color:darkred; }

	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form>

	<h4 align="center"><a href="views/sign_in.php">Sign In</a></h4>
	<h4 align="center"><a href="views/sign_up.php">Sign Up</a></h4>
</form>
</body>
</html>*/

<?php
require_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
     
// закрываем подключение
mysqli_close($link);
?>
