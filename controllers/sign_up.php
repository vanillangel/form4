
<?php
$su_un=$_POST['su_username'];
$su_eadd=$_POST['su_eaddress'];
$su_pasw=$_POST['su_password'];
echo 'Пользователь: ',$su_un,'<br>E-mail адрес: ',$su_eadd,'<br>Пароль: ',$su_pasw;

if (empty($su_un)) {
	echo 'Имя пользователя не введено';
	header('Refresh: 5; url=http://localhost/views/sign_up.php');
}
if (empty($su_eadd)) {
	echo 'Пароль не введен';
	header('Refresh: 5; url=http://localhost/views/sign_up.php');
}
if (empty($su_pasw)) {
	echo 'Пароль не введен';
	header('Refresh: 5; url=http://localhost/views/sign_up.php');
}
?>
