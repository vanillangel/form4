
<?php
$si_un=$_POST['si_username'];
$si_pasw=$_POST['si_password'];
echo 'Пользователь: ',$si_un,'<br>Пароль: ',$si_pasw;

if (empty($si_un)) {
	echo 'Имя пользователя не введено';
	echo '<a href="#" OnClick="history.back();">Назад</a>';
}
if (empty($si_pasw)) {
	echo 'Пароль не введен';
	echo '<a href="#" OnClick="history.back();">Назад</a>';
}
?>
