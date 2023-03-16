<?php

require_once '../config/connect.php';

$product_id = $_GET['id'];
$product = mysqli_query($mysql, "SELECT * FROM `products` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);


?>

<?php
require_once '../config/connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>K-town</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
  </head>
  <body>
  <header>
    <!-- Начало шапки -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="catalogs nav-link active mx-4" aria-current="page" href="../pages/catalog.php"><img class="me-2" src="../img/List.svg" alt="list">Каталог товаров</a>
              </li>
              <li class="nav-item">
                <a class="catalogs nav-link active mx-4" aria-current="page" href="../pages/dostavka.php">Доставка и оплата</a>
              </li>
            </ul>
            <ul class="navbar-nav mx-3">
            <?php 
                if($_COOKIE['user'] == ''):
              ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Личный кабинет
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Регистрация</a></li>
                  <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">Авторизация</a></li>
                </ul>
              </li>
                <?php else:?>
                  <div class="dropdown">
                  <button class="btn btn-outline-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <b><?=$_COOKIE['user']?></b>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/exit.php">Выйти</a></li>
                    <?php 
                        if($_COOKIE['role_id'] == 2):
                      ?>
                    <li><a class="dropdown-item" href="../pages/admpanel.php">Админ-панель</a></li>
                    <?php else:?>
                      <li><a class="dropdown-item" href="../pages/lichcabinet.php">Личный кабинет</a></li>
                    <?php endif;?>
                  </ul>
                </div>
                <?php endif;?>
                <a class="mt-1 mx-1" href="#"><img src="../img/Bag.png" alt="bag"></a>
            </ul>
          </div>
          <!-- Modal start -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Регистрация</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form start -->
                        <form action="/pages/register.php" method="post" class="row g-3 needs-validation" novalidate>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Ваше имя:</label>
                                <input type="text" class="form-control" name="name" id="validationCustom01" required>
                                <div class="valid-feedback">
                                Всё отлично
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Ваша фамилия</label>
                                <input type="text" class="form-control" name="surname" id="validationCustom02" required>
                                <div class="valid-feedback">
                                Всё отлично
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Логин</label>
                                <input type="text" class="form-control" name="login" id="validationCustom02" required>
                                <div class="valid-feedback">
                                Всё отлично
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Почта</label>
                                <input type="email" class="form-control" name="email" id="validationCustom02" required>
                                <div class="valid-feedback">
                                Всё отлично
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Пароль</label>
                                <input type="password" class="form-control" name="pass" id="validationCustom02" required>
                                <div class="valid-feedback">
                                Всё отлично
                                </div>
                            </div>
                            <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label">Повторите пароль</label>
                                        <input type="password" class="form-control" name="repeat_pass" id="validationCustom02" required>
                                        <div class="valid-feedback">
                                        Всё отлично
                                        </div>
                                    </div>
                            <div class="col-12">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Согласие на обработку персональных данных
                                </label>
                                <div class="invalid-feedback">
                                    Вы не согласились на обработку персональных данных!
                                </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Зарегестрироваться</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                </div>
            </div>
        </div>
    <!-- modal end -->

    <!-- Modal start -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModal1Label">Авторизация</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form start -->
                        <form action="/pages/login.php" method="post" class="row g-3 needs-validation" novalidate>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Логин</label>
                                <input type="text" class="form-control" name="login" id="validationCustom02" required>
                                <div class="valid-feedback">
                                Всё отлично
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Пароль</label>
                                <input type="password" class="form-control" name="pass" id="validationCustom02" required>
                                <div class="valid-feedback">
                                Всё отлично
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Авторизация</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                </div>
            </div>
        </div>
    <!-- modal end -->
        </div>
      </nav>
    <!-- Конец шапки -->
    </header>
    
    <main>
    <section class="container my-5">
    <h3 class="text-center">Изменить продукт</h3>
    <div style="height: 2px; background-color: #852cf5; width: 300px; margin: 0 auto; margin-bottom: 60px; margin-top: 40px;"></div>
    <form action="../vendor/update.php" method="post" class="row g-3 needs-validation d-flex flex-column align-items-center" novalidate>
        <div class="col-md-5">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
        </div>
        <div class="col-md-5">
            <p>Название продукта</p>
            <input type="text" name="title" class="form-control p-3" value="<?= $product['title'] ?>">
        </div>
        <div class="col-md-5">   
            <p>Описание продукта</p>
            <textarea name="description" class="form-control"><?= $product['description'] ?></textarea>
        </div>
        <div class="col-md-5"> 
            <p>Цена продукта</p>
            <input type="number" name="price" class="form-control" value="<?= $product['price'] ?>">
        </div>
        <div class="col-md-5"> 
            <p>Изменить картинку</p>
            <input type="file" name="image" class="form-control" value="<?= $product['img'] ?>">
        </div>
        <div class="col-md-5"> 
            <p>Категория продукта</p>
            <input type="text" name="category" class="form-control" value="<?= $product['category_id'] ?>">
        </div>
        <div class="col-md-3 d-flex flex-column align-items-center">
        <button class="btn btn-dark p-2 mt-5 me-3 w-50" type="submit">Изменить</button>
        </div>
    </form>
    </section>
    </main>

    <footer>
      <section class="footer">
        <div class="container">
          <div class="row">

            <div class="col-md-3 col-6 mt-3">
              <h4 class="fw-bold">Информацция</h4>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="#">Главная</a></li>
                <li class="mb-2"><a href="#">О нас</a></li>
                <li class="mb-2"><a href="#">Оплата и доставка</a></li>
                <li class="mb-2"><a href="#">Контакты</a></li>
              </ul>
            </div>

            <div class="col-md-3 col-6 mt-3">
              <h4 class="fw-bold">Шоурум</h4>
              <ul class="list-unstyled">
                <li class="mb-2">Каждый день без выходных</li>
                <li class="mb-2">11:00 – 20:00</li>
                <li class="mb-2">м. Курская</li>
                <li class="mb-2">Нижний Сусальный переулок, 5с4А, подъезд 8</li>
              </ul>
            </div>

            <div class="col-md-3 col-6 mt-3">
              <h4 class="fw-bold">Поддержка</h4>
              <ul class="list-unstyled">
                <li class="mb-2">Каждый день без выходных</li>
                <li class="mb-2">11:00 – 20:00</li>
                <li class="mb-2"><a href="#">helprizzo@gmail.com</a></li>
                <li class="mb-2"><a href="tel:9144565434">914-456-54-34</a></li>
              </ul>
            </div>

            <div class="col-md-3 col-6 mt-3">
              <h4 class="fw-bold">Соцсети</h4>
              <div class="footer-icons">
                <a href="#"><img src="/img/Facebook.svg" alt="Facebook" width="50"></a>
                <a href="#"><img src="/img/Telegram.svg" alt="Telegram" width="50"></a>
                <a href="#"><img src="/img/Whatsapp.svg" alt="Whatsapp" width="50"></a>
                <a href="#"><img src="/img/Discord.svg" alt="Discord" width="50"></a>
              </div>
            </div>

          </div>
        </div>
      </section>
    </footer>


    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>