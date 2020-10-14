
<?php
$su_un=$_POST['su_username'];
$su_eadd=$_POST['su_eaddress'];
$su_pasw=$_POST['su_password'];
echo 'Пользователь: ',$su_un,'<br>E-mail адрес: ',$su_eadd,'<br>Пароль: ',$su_pasw;

if (empty($su_un) || empty($su_eadd) ||empty($su_pasw)) {
	echo '<br>!!!ATTENTION!!!<br>!!!ATTENTION!!!<br>!!!ATTENTION!!!<br>Одно или несколько полей формы пустые';
	header('Refresh: 5; url=http://localhost/views/sign_up.php');
}

?>
