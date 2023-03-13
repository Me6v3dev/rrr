<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../style/personal-cabinet.css">
</head>
<body>
<?php
		session_start();
		$user_id = $_SESSION['id'];

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

		// Получаем текущие значения полей из базы данных
		$sql = "SELECT * FROM `users` WHERE id = '$user_id'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$first_name = $row["first_name"];
			$last_name = $row["last_name"];
			$email = $row["email"];
			$password = $row["password"];
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		// Закрытие соединения с базой данных
		mysqli_close($conn);
	?>
    <div class="container">
        <div class="personal-info">
            <h2>Личные данные</h2>
            <p>Имя: <?php echo $first_name; ?></p>
            <p>Фамилия: <?php echo $last_name; ?></p>
            <p>Email: <?php echo $email; ?></p>
            <p>Пароль: <?php echo $password; ?></p>
            <button onclick="location.href='edit-info.php'">Редактировать</button>
        </div>
    </div>
</body>
</html>




