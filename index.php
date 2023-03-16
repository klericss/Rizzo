<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>K-town</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
  </head>
  <body>
    <header>
    <!-- Начало шапки -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="catalogs nav-link active mx-4" aria-current="page" href="pages/catalog.php"><img class="me-2" src="img/List.svg" alt="list">Каталог товаров</a>
              </li>
              <li class="nav-item">
                <a class="catalogs nav-link active mx-4" aria-current="page" href="pages/dostavka.php">Доставка и оплата</a>
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
                    <li><a class="dropdown-item" href="/pages/exit.php">Выйти</a></li>
                    <?php 
                        if($_COOKIE['role_id'] == 2):
                      ?>
                    <li><a class="dropdown-item" href="/pages/admpanel.php">Админ-панель</a></li>
                    <?php else:?>
                      <li><a class="dropdown-item" href="/pages/lichcabinet.php">Личный кабинет</a></li>
                    <?php endif;?>
                  </ul>
                </div>
                <?php endif;?>
                <a class="mt-1 mx-1" href="#"><img src="img/Bag.png" alt="bag"></a>
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
        <!-- Начало слайдера -->
        <section class="container my-5">
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/banner.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Varmilo Chang'e - Богиня луны уже у нас!</h3>
                  <p class="mb-5">Безумно красивая лимитированная модель от Varmilo. Звездное небо, фазы Луны при включенной подсветке и прикольный заяц-астронавт в комплекте.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/banner2.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Varmilo Sakura R1 87 - красивый стиль!</h3>
                  <p class="mb-5">Яркая звезда на небосводе китайских производителей клавиатур. Смазанные стабилизаторы, ручная сборка, эстетичный дизайн — каждая клавиатура Varmilo как произведение искусства. </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
        <!-- Конец слайдера -->
        
        <section class="container my-5 popular_tovars">
            <h1 class="text-center">Популярные товары</h1>
            <div style="height: 2px; background-color: #852cf5; width: 400px; margin: 0 auto; margin-bottom: 60px; margin-top: 40px;"></div>
            <div class="row mx-5">
                <div class="col-lg-4 col-sm-6">
                    <div class="card border-0">
                        <a href="pages/card.php"><img src="img/1.jpg" class="card-img-top scale" alt="..."></a>
                        <div class="card-body text-center">
                            <h5>Ducky One 3 Mini White</h5>
                            <p class="card-text">Самый популярный и универсальный вариант</p>
                            <p class="card-text">12 500 руб</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card border-0">
                        <a href="pages/card.php"><img src="img/2.jpg" class="card-img-top scale" alt="..."></a>
                        <div class="card-body text-center">
                            <h5>Ducky One 3 SF White</h5>
                            <p class="card-text">Легко нажимаются и имеют тактильный отклик</p>
                            <p class="card-text">13 499 руб</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card border-0">
                        <a href="pages/card.php"><img src="img/3.jpg" class="card-img-top scale" alt="..."></a>
                        <div class="card-body text-center">
                            <h5>Ducky One 3 TKL White</h5>
                            <p class="card-text">Самый популярный и универсальный вариант</p>
                            <p class="card-text">14 990 руб</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card border-0">
                        <a href="pages/card.php"><img src="img/4.jpg" class="card-img-top scale" alt="..."></a>
                        <div class="card-body text-center">
                            <h5>Ducky One 3 Mini Black</h5>
                            <p class="card-text">Легко нажимаются и имеют тактильный отклик</p>
                            <p class="card-text">12 490 руб</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card border-0">
                        <a href="pages/card.php"><img src="img/5.jpg" class="card-img-top scale" alt="..."></a>
                        <div class="card-body text-center">
                            <h5>Ducky One 3 SF Yellow</h5>
                            <p class="card-text">Самый популярный и универсальный вариант</p>
                            <p class="card-text">13 490 руб</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card border-0">
                        <a href="pages/card.php"><img src="img/6.jpg" class="card-img-top scale" alt="..."></a>
                        <div class="card-body text-center">
                            <h5>Ducky One 3 SF Black</h5>
                            <p class="card-text">Легко нажимаются и имеют тактильный отклик</p>
                            <p class="card-text">16 000 руб</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- О компании -->
        <section class="container my-5 d-flex justify-content-center flex-column align-items-center">
            <h1 class="text-center mb-5">Почему именно мы?</h1>
            <div style="height: 2px; background-color: #852cf5; width: 400px; margin: 0 auto; margin-bottom: 60px;"></div>
            <p class="text-center w-50">Rizzo - это магазин механических клавиатур для профессионалов. Мы продаём только то, что нравится нам самим. Каждую представленную на сайте клавиатуру мы рекомендуем. У нас лучшая в мире поддержка клиентов: наши помощники-волшебники всегда на связи и готовы ответить на любой, даже самый дурацкий вопрос. А еще они следят за доставкой каждого заказа лично, чтобы быть уверенными, что клавиатура приедет вовремя, а если что-то пойдет не так - вовремя среагировать.
            </p>
            <img class="mt-3 img-fluid" src="img/about-2.webp" alt="company" width="600">
        </section>

        <section class="container my-5">
            <h1 class="text-center mb-5">Где мы находимся?</h1>
            <div style="height: 2px; background-color: #852cf5; width: 400px; margin: 0 auto; margin-bottom: 60px;"></div>
            <div class="about d-flex align-items-center justify-content-center">
                <div class="first-about">
                <p class="fw-bold">Наш адрес:</p>
                <p class="light">Рождественская ул., 11</p>
                <p class="fw-bold">График работы:</p>
                <p  class="light">Ежедневно с 8:00 до 23:00</p>
                <p class="fw-bold">Наша почта</p>
                <p  class="light">nashapochta1@gmail.com</p>
                <p class="fw-bold">Наш номер телефона</p>
                <p  class="light">7 (945) 954-46-43</p>
                </div>
                <div class="maps mx-5">
                    <img src="img/Карта.png" width="600" alt="Карта">
                </div>
            </div>
        </section>

<!-- Section forms -->
<section class="container my-5 p-3 mb-5">
  <div class="about_form mt-3 d-flex flex-column align-items-center">
    <h1 class="text-center mt-5 mb-5">Свяжитесь с нами по любым вопросам</h1>
    <div style="height: 2px; background-color: #852cf5; width: 700px; margin: 0 auto; margin-bottom: 30px;"></div>
    <p class="text-center fs-5 w-50">Мы всегда рады коллаборациям, интересным проектам и отзывам наших клиентов</p>
  </div>
  <div class="first_form mt-5">
    <form class="row g-3 needs-validation d-flex flex-column align-items-center" novalidate>
      <div class="col-md-5">
        <input type="text" class="form-control p-3" id="validationCustom01" placeholder="Ваше имя" required>
      </div>
      <div class="col-md-5">
        <input type="text" class="form-control p-3" id="validationCustom02" placeholder="Номер телефона" required>
      </div>
      <div class="col-md-5">
      <textarea class="form-control" id="validationTextarea" placeholder="Введите сообщение" required></textarea>
      </div>
      <div class="col-md-3 d-flex flex-column align-items-center">
        <button class="btn btn-dark p-3 w-50" type="submit">Отправить</button>
      </div>
    </form>
    <div class="about_formss text-center mt-3 d-flex flex-column align-items-center">
      <p class="w-50 light-color d-flex align-items-center">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</p>
    </div>
  </div>
</section>
<!-- Section forms end-->
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