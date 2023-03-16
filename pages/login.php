<?php

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

// подключение к бд

$mysql = new mysqli('localhost', 'root', '', 'register-bg');

$result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
$user=$result->fetch_assoc();
if(count($user) == 0){
    echo "TAKOI POLZOVATEL NE NAIDEN!";
    exit();
}

setcookie('user', $user['name'], time()+3600, "/");  /* expire in 1 hour */

setcookie('role_id', $user['role_id'], time()+3600, "/");  /* expire in 1 hour */

$mysql->close();

header('Location:/');



?>