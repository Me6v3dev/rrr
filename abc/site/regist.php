<?php

session_start();

// Параметры подключения к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Создаем подключение к базе данных
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверяем подключение к базе данных
if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}


// Получаем данные из формы
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Проверяем, что все поля заполнены
if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
    echo "Пожалуйста, заполните все поля";
    exit();
}

// Проверяем, есть ли уже пользователь с таким email в базе данных
$check_query = "SELECT * FROM users WHERE email = '$email'";
$check_result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    // Если пользователь с таким email уже есть, выводим сообщение об ошибке
    echo "Пользователь с таким email уже зарегистрирован";
    exit();
} else {

    // Добавляем пользователя в базу данных
    $sql = "INSERT INTO users (first_name,last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
    $insert_result = mysqli_query($conn, $sql);

    if ($insert_result) {
        // Если пользователь успешно зарегистрирован, перенаправляем его на страницу логина
        header("Location: avtorizaciay.php");
        exit();
    } else {
        // Если что-то пошло не так, выводим сообщение об ошибке
        echo "Ошибка при регистрации пользователя";
        exit();
    }
}


// Закрываем подключение к базе данных
mysqli_close($conn);
