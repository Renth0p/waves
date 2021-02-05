<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/flower.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- СSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>WAVES | Цветочный магазин</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="">
        </div>
        <nav>
            <a href="#">Магазин</a>
            <a href="#">Услуги</a>
            <a href="aboutus.php">О нас</a>
            <a href="login.php">Вход</a>
        </nav>
        <div class="text-main">
            <h1>Давайте найдем <p>ваши любимые</p> растения.</h1>
    </header>

    <main>
        <div class="btn-catelog">
            <a href="#shop">Магазин</a>
        </div>
        <div class="text-under-btn">
            <h2>Если вы не знаете, какие растения вы можете добавить в пространство,<p> мы можем предоставить вам выбранные растения</p> и настроить ваше пространство</h2>
        </div>
        <div class="types-shop">
            <h3 id="#shop">4 типа растений</h3>
        </div>
        <div class="card-list">
            <div class="card">
                <h3>Плодовые</h3>
                <a href="">Посмотреть</a>
                <img src="/img/cards/fruits.jpeg">
            </div>
            <div class="card">
                <h3>Декоративные</h3>
                <a href="">Посмотреть</a>
                <img src="/img/cards/roses.png">
            </div>
            <div class="card">
                <h3>Кактусовые</h3>
                <a href="">Посмотреть</a>
                <img src="/img/cards/cactus.jpeg">
            </div>
            <div class="card">
                <h3>Хвойные</h3>
                <a href="">Посмотреть</a>
                <img src="/img/cards/hv.jpg">
            </div>
        </div>
    </main>

</body>
</html>