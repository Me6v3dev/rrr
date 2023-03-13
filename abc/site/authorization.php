<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../style/authorization.css">
    <link rel="shortcut icon" type="image/png" href="../photos/logo.png" />

</head>

<body>
    <div class="photo"></div>

    <header>
        <h1><br>Авторизация <br></h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="heroes.php">Герои</a></li>
            <li><a href="history.php">История</a></li>
            <li><a href="contacts.php">Контакты</a></li>
            <li><a href="authorization.php">Авторизация</a></li>
        </ul>
    </nav>
        <section>
            <form class="login-form" action="auth.php" method="POST">
                <img src="../photos/logo.png" alt="ERROR" style="width: 150px; height: 150px;">
                <h2>Вход</h2>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Введите email" required>
                </div>
                <div class="form-control">
                    <label for="password"> Введите пароль</label>
                    <input type="password" id="password" name="password" placeholder="Введите пароль" required>
                </div>
                <button type="submit" id="login-button" href="./auth.php">Войти</button>
                <p>Нет аккаунта? <a href="reg.php">Зарегистрируйтесь</a></p>
            </form>
        </section>
    <footer>
         &copy;Все права защищены.
    </footer>

</body>

</html>