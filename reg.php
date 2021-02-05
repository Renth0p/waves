<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>WAVES | Регистрация</title>
</head>
<body>
    <section class="reg">
        <div class="reg-sqrt">
            <form action="includes/signup.php" method="post">
            <h1>Вход</h1>
                <label for="">ФИО</label>
                <input type="text" name="full_name" placeholder="Введите своё полное имя">
                <label>Логин</label>
                <input type="text" name="login" placeholder="Введите свой логин">
                <label>Почта</label>
                <input type="text" name="email" placeholder="Введите свою почту">
                <label>Пароль</label>
                <input type="password" name="password" placeholder="Введите свой пароль">
                <label>Потверждение пароль</label>
                <input type="password" name="password_confirm" placeholder="Потвердите свой пароль">
                <button type="submit">Зарегистрироваться</button>   
                <p>
                    У вас уже есть аккаунт? - <a href="login.php">Авторизируйтесь</a>
                </p>
                <?php  
                    if ($_SESSION['message']) {
                        echo '<p class="wrong_password"> ' . $_SESSION['message'] . ' </p>';
                    }
                    unset($_SESSION['message']);
                ?>
            </form>
        </div>
    </section>
</body>
</html>