<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_POST['image'];
$category = $_POST['category'];



mysqli_query($mysql, "UPDATE `products` SET `title` = '$title', `description` = '$description',  `price` = '$price', `img` = '$image', `category_id` = '$category' WHERE `products`.`id` = '$id'");

