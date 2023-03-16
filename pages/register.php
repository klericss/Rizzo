<?php

$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']),
FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$repeat_pass = filter_var(trim($_POST['repeat_pass']),
FILTER_SANITIZE_STRING);
// подключение к бд

$mysql = new mysqli('localhost', 'root', '', 'register-bg');

$mysql->query("INSERT INTO `users` (`name`, `surname`, `login`, `email`, `pass`, `repeat_pass`, `role_id`)
VALUE ('$name', '$surname', '$login', '$email', '$pass', '$repeat_pass', 1)");

$mysql->close();

header('Location:/');


?>