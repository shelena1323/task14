<?php 
/*
$users = [
    ['login' => 'Irina', 'password' => sha1('123456')],
    ['login' => 'Elena', 'password' => sha1('qwe123')],
    ['login' => 'David', 'password' => sha1('qwerty')],
    ['login' => 'Diana', 'password' => sha1('778899')],
    ['login' => 'Sasha', 'password' => sha1('147852')],
    ['login' => 'Jenya', 'password' => sha1('369852')],
];
*/
$mysql = new mysqli("Localhost", "mysql", "mysql");
if (!$mysql) {
    die("Ошибка: " . mysqli_connect_error());
  } 

$sql = "CREATE DATABASE task14";
if(mysqli_query($mysql, $sql)){
    echo "База данных успешно создана";
} else{
    echo "Ошибка: " . mysqli_error($conn);
}





function getUsersList(){   
    global  $users;
    return $users;
}

$users->close();
header('Location: login.php');
exit;
?>