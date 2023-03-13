<?php

session_start();

// Параметры подключения к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Создаем подключение к базе данных
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверка подключения
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Обработка данных из формы авторизации
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Запрос к базе данных для проверки существования пользователя
    $sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Аутентифицируем пользователя и сохраняем его идентификатор в сессии
        session_start();
        $_SESSION['id'] = 1; // Здесь нужно использовать реальный идентификатор пользователя

        // Переадресуем на страницу личного кабинета
        header('Location: personal-cabinet.php');
        exit();
    } else {
        // Неправильные данные для входа
        echo "Invalid name or password";
    }
}

// Закрытие соединения с базой данных
mysqli_close($conn);

?>
