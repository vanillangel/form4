
<?php
$si_un=$_POST['si_username'];
$si_pasw=$_POST['si_password'];
echo 'Пользователь: ',$si_un,'<br>Пароль: ',$si_pasw;

if (empty($si_un) ||empty($si_pasw)) {
	echo '<br>!!!ATTENTION!!!<br>!!!ATTENTION!!!<br>!!!ATTENTION!!!<br>Одно или несколько полей формы пустые';
	header('Refresh: 5; url=http://localhost/views/sign_in.php');
}

?>
