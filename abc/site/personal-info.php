<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Личная информация</title>
	<link rel="stylesheet" href="../style/personal-info.css">
	<link rel="stylesheet" href="../style/edit-info.css">
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
	if (!empty($user_id)) {
		$sql = "SELECT * FROM `users` WHERE id = '$user_id'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$first_name = $row["first_name"];
			$last_name = $row["last_name"];
			$email = $row["email"];
			$password = $row["password"];
		}
	} else {
		echo "Идентификатор пользователя пуст";
	}

	// Закрытие соединения с базой данных
	mysqli_close($conn);

	?>
	<header>
		<h1>Личная информация</h1>
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
		<div class="container">
			<h2>Личная информация</h2>
			<div class="info">
				<div class="row">
					<div class="label">Имя:</div>
					<div class="value"><?php echo $first_name; ?></div>
				</div>
				<div class="row">
					<div class="label">Фамилия:</div>
					<div class="value"><?php echo $last_name; ?></div>
				</div>
				<div class="row">
					<div class="label">Email:</div>
					<div class="value"><?php echo $email; ?></div>
				</div>
				<div class="row">
					<div class="label">Пароль:</div>
					<div class="value"><?php echo $password?></div>
				</div>
				<div class="buttons">
					<a href="edit-info.php" class="button edit-button">Редактировать</a>
					<a href="logout.php" class="button logout-button">Выйти</a>
				</div>
			</div>
	</section>
	<footer>
		&copy;Все права защищены.
	</footer>
</body>
</html>