<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>WAVES | Вход</title>
</head>
<body>
    <section class="login">
        <div class="login-sqrt">
            <form action="includes/signin.php" method="post">
            <h1>Вход</h1>
                <label for="">Логин</label>
                <input type="text" name="login" placeholder="Введите свой логин">
                <label>Пароль</label>
                <input type="password" name="password" placeholder="Введите свой пароль">
                <button type="submit">Войти</button> 
                <p>
                    У вас нет аккаунта? - <a href="reg.php">Зарегистрируйтесь</a>
                </p>       
            </form>
        </div>
    </section>
</body>
</html>