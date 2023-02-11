<?php
session_start();
unset($_SESSION['name']);
unset($_COOKIE["cookLog"]);
header('Location: ../index.php');
exit;

