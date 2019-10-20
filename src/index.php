<?php
$firstName = 'Serhio';
$secondName = 'Vasilenko';
$age = 47;
$login = 'serhio';
$password = 'password';


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<h2>Форма регистрации</h2>
<form action="post">
    <label for="firstName">Имя:</label><br>
    <input type="text" name="firstName" value="<?=$firstName?>"><br>
    <label for="secondName">Фамилия:</label><br>
    <input type="text" name="secondName" value="<?=$secondName?>"><br>
    <label for="age">Возраст:</label><br>
    <input type="text" name="firstName" value="<?=$age?>"><br>
    <label for="login">Логин:</label><br>
    <input type="text" name="login" value="<?=$login?>"><br>
    <label for="password">Пароль</label><br>
    <input type="password" name="password" value="<?=$password?>"><br>
    <input type="submit" value="Отправить данные">
</form>
</body>
</html>
