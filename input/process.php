<?php 
// getUsersList() возвращает массив всех пользователей и хэшей их паролей;
//existsUser($login) проверяет, существует ли пользователь с указанным логином;
// checkPassword($login, $password) пусть возвращает true тогда, когда существует пользователь с указанным логином и введенный им пароль прошел проверку, иначе — false;
//getCurrentUser() которая возвращает либо имя вошедшего на сайт пользователя, либо null
 
include 'users.php';

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;


    


if (null !== $username || null !== $password) {
    if ($password === $users['admin']['password']) {
        session_start();
        $_SESSION['auth'] = true;
        $_SESSION['id'] = $users['admin']['id']; 
        $_SESSION['login'] = $username;
    }
}

$auth = $_SESSION['auth'] ?? null;
if ($auth) {
    header('Location: ../index.php');
    exit;
}
//header('Location: login.php');
//exit;
?>