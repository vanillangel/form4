<? php
$si_un=$_POST['si_username']
$si_pasw=$_POST['si_password']

$fd = fopen("/users.txt", 'w') or die("не удалось создать файл");
fwrite($fd, "Пользователь: "+$si_un+"Пароль: "+$si_pasw);
fclose($fd);
?>
