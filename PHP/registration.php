<?php
session_start();
require_once "connect.php";

if(!empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['email'])){

$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = "INSERT INTO `users` SET login='$login', password='$password', email='$email' ";

mysqli_query($link, $query) or die('<p>Неудачная регистрация' . mysqli_error($link) . '</p>');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='../css/reg.css'>
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <p>Регистрация</p>
        <input name="login" placeholder="Логин" type="text" />
        <input name="password" placeholder="Пароль" type="password" />
        <input name="email" placeholder="Email" type="email" />
        <input type="submit" value="Зарегистрироваться" />
        <a href='login.php'>Авторизоваться</a>
    </form>
</body>
</html>