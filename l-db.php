<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'test';
$link = mysqli_connect($host, $user, $password, $db_name);
$login = $_POST['login'];
$password = $_POST['password'];
?>