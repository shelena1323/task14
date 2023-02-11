<?php
session_start();
// getUsersList() возвращает массив всех пользователей и хэшей их паролей;
//existsUser($login) проверяет, существует ли пользователь с указанным логином;
// checkPassword($login, $password) пусть возвращает true тогда, когда существует пользователь с указанным логином и введенный им пароль прошел проверку, иначе — false;
//getCurrentUser() которая возвращает либо имя вошедшего на сайт пользователя, либо null

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
$login = trim($_POST['login']);
$password = trim(md5($_POST['password']));

function getUsersList(){
    include 'usbd.php';
    for($i=0; $i < count($usbd); $i++){
        $user = ['login' => $usbd[$i]['login'], 'password' => $usbd[$i]['password']];
        $users[] = $user;
    }    
    return $users;
}

function existsUser($login){
    $users = getUsersList();    
    foreach ($users as $user){
        if ($user['login'] === $login){  
            return true;       
        }          
    }
}

function checkPassword($login, $password){
    $users = getUsersList();    
    foreach ($users as $user){
        if (($user['login'] === $login) && ($user['password'] === $password)){  
            return true;       
        }    
    }
}

//checkPassword($login, $password);

function getCurrentUser(){
    $login = trim($_POST['login']);
    $password = trim(md5($_POST['password']));
    $auth = checkPassword($login, $password);
    if ($auth){
        $_SESSION['name'] = $login;
        header('Location: ../index.php');
        exit;    
    } else {
        $_SESSION['message'] = 'Неверный пользователь или пароль';
        header('Location: login.php');
        exit;
    }
}

getCurrentUser();
/*
$_SESSION['message'] = 'Такого пользователя не существует, зарегистрируйтесь';
header('Location: registry.php');
         

$_SESSION['message'] = 'Неверный пользователь или пароль';
header('Location: login.php');
exit;
*/
//echo checkPassword($login, $password);

//$mysql->close();
//header('Location: login.php');
//exit;
?>