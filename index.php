<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php
require_once('l-db.php');

if(!empty($_POST['password']) and !empty($_POST['login'])){
    $query = "SELECT * FROM users WHERE login = '$login' and password = $password";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);
    if (!empty($user)){
        echo "Авторизация прошла успешно!<br>";
    } else{
        echo "Пройдите авторизацию! Вы не зарегистрированны в данный момент. Это не займет много времени. <br><br><br>";
    }
} else{
    echo "Введите логин и пароль :<br><br>";
}
?>

<form action="" method="POST">
    <label>LOGIN<input type="text" name="login"></label><br>
    <label>PASSWORD<input type="password" name="password"></label><br>
    <input type="submit" value="Отправить">
</form>

</body>
</html>
