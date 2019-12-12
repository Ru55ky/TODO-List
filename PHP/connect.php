<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "todolist";
$link = mysqli_connect($host, $user, $password, $db_name)
or die("<p>Не удалось подключиться к базе данных" . mysqli_connect() . "</p>");

mysqli_query($link, "SET NAMES 'utf-8'");

$select = mysqli_select_db($link, "todolist")
or die("<p>Не удалось выбрать базу данных" . mysqli_error() . "</p>");



?>