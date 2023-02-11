<?php
session_start(); 
$title = 'Акции';

if(($_SESSION['name']?? '') === ''){
    require "blocks/header1.php";
    require "blocks/ad1.php";
} elseif(isset($_SESSION['user'])&& isset($_COOKIE["cookPromo"])) {
    require "blocks/header2.php";
    require "blocks/ad2.php";
} else {
    require "blocks/header2.php";
    require "blocks/ad1.php";
}


    
?>

<?php 
    require "blocks/footer.php";
?>