<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($mysql, "DELETE FROM `products` WHERE `products`.`id` = '$id'");

