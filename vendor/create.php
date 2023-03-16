<?php

require_once '../config/connect.php';


$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_POST['image'];
$category = $_POST['category'];

mysqli_query($mysql, "INSERT INTO `products` (`id`, `title`, `price`, `description`, `img`, `category_id`) VALUES (NULL, '$title', $price, '$description', '$image', $category)");

header('Location /');