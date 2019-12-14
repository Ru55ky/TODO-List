<?php
session_start();
require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../css/login.css">
</head>
<body>
    <?php
    
    if(!empty($_POST['password']) and !empty($_POST['login']) and !empty($_POST['email'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $query = "SELECT * FROM users WHERE login='$login' AND password='$password' AND email='$email' ";
        $result = mysqli_query($link, $query);

        $user = mysqli_fetch_assoc($result);
        
    
    if(!empty($user)){
        $_SESSION['auth'] = true;
    }else{
        echo "<p>Вы не авторизовались</p>";
    }
}

    ?>
    <form method="POST" action="" class="form">
        <p>Авторизация</p>
        <input type="text" placeholder="Логин" name="login" class="input-form" />
        <input type="password" placeholder="Пароль" name="password" class="input-form" />
        <input type="email" placeholder="Email" name="email" class="input-form" />
        <input type='submit' value='Авторизоваться' name='submit' class='input-form'/>  
        <a href="registration.php" class="a-btn">Регистрация</a>
        <?php if(!empty($_SESSION['auth'])){
                echo "<script> window.location = '../index.php'</script>";
        } ?>
    </form>
   
</body>
</html>