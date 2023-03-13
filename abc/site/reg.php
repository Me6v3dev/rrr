<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="../photos/logo.png" />
  <link rel="stylesheet" href="../style/reg.css">
  <title>Регистрация</title>
</head>

<body>
  <header>
    <h1>Интерактивная карта исторических данных <br> Великой Отечественной Войны</h1>
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
    <form class="form" action="regist.php" method="POST">
      <img src="../photos/logo.png" alt="ERROR">
      <h2>Регистрация</h2>
      <div class="form-control">
        <label for="name">Имя</label>
        <input type="text" id="first_name" name="first_name" placeholder="Введите имя" required>
      </div>
      <div class="form-control">
        <label for="name">Фамилия</label>
        <input type="text" id="last_name" name="last_name" placeholder="Введите фамилию" required>
      </div>
      <div class="form-control">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Введите email" required>
      </div>
      <div class="form-control">
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" placeholder="Введите пароль" required>
      </div>
      <button type="submit" class="btn" href="avtorizaciay.php">Зарегистрироваться</button>
      <p>Уже есть аккаунт? <a href="authorization.php">Войдите</a></p>
    </form>
  </section>
  <footer>
    <div class="footer">
      &copy;Все права защищены.
    </div>
  </footer>
</body>

</html>