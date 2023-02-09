<?php 
/*
$users = [
    ['login' => 'Irina', 'password' => md5('123456')],
    ['login' => 'Elena', 'password' => md5('qwe123')],
    ['login' => 'David', 'password' => md5('qwerty')],
    ['login' => 'Diana', 'password' => md5('778899')],
    ['login' => 'Sasha', 'password' => md5('147852')],
    ['login' => 'Jenya', 'password' => md5('zxcasd')],
    ['login' => 'Anton', 'password' => md5('111111')],
    ['login' => 'Anna', 'password' => md5('1515asd')],
];
*/
session_start();
$login = trim($_POST['login']);
$password = trim(md5($_POST['password']));
$pass = trim(md5($_POST['pass']));

if ($password===$pass){
    $mysql = new mysqli('Localhost', 'root', '', 'task14');
    $mysql->query("INSERT INTO `usbd` (`login`, `password`)VALUES('$login', '$password')");
    $_SESSION['message'] = 'Регистрация прошла успешно! Зайдите в ЛК';
    header('Location: login.php');
} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: registry.php');
    exit;
}
?>