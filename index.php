<?php
session_start();

require_once "PHP/connect.php";                                                  
?>
<?php if(empty($_SESSION['auth'])){
    echo"<script>window.location = 'PHP/login.php'</script>";
}  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href='css/style.css'>
    <title>Document</title>
</head>
<body>
    <div class="popup">
        <div class="popup-name">
        <input type="text" placeholder="Введите ваше имя" class="input-popup" required/>
        <button class="btn-success">Принять</button>
        </div>
    </div>
        <div class="nav-bar">
        <p>Todo-list</p>
        <a href="">Сменить имя пользователя</a>
        <input type="text" class="input-nav" />
        <?php echo '<a href="PHP/logout.php">Выйти</a>'?>
        </div>

        <form method="GET" class="add-form">
        <div class="parent-input">
        <input type="text" placeholder="Придумай задачу" class="inp-js" required/>
        <button class="check-input">Добавить</button>   
            <h1 class="empty-message hover">Нет новых задач</h1>
            <h1 class="emptyName taskName">Введите название задачи</h1>
        </div>
        </form>
    <script src="js/main.js"></script>
 
</body>
</html>
