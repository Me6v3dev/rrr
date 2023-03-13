<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Редактирование личной информации</title>
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
	// Обработка данных из формы редактирования
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
		$new_first_name = $_POST['first_name'];
		$new_last_name = $_POST['last_name'];
		$new_email = $_POST['email'];
		$new_password = $_POST['password'];
		// Запрос к базе данных для обновления данных пользователя
		$sql = "UPDATE `users` SET first_name = '$new_first_name', last_name = '$new_last_name', email = '$new_email', password = '$new_password' WHERE id = '$user_id'";
		if (mysqli_query($conn, $sql)) {
			// Данные успешно обновлены
			header('Location: personal-info.php');
			exit();
		} else {
			// Ошибка при обновлении данных
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		if (empty($user_id)) {
			echo "Error: User ID is empty";
			exit;
		}
	}
	// Закрытие соединения с базой данных
	mysqli_close($conn);
	?>
	<div class="container">
		<h2>Редактирование личной информации</h2>
		<form method="POST">
			<label>Имя:</label>
			<input type="text" name="first_name" value="<?php echo $first_name; ?>">
			<label>Фамилия:</label>
			<input type="text" name="last_name" value="<?php echo $last_name; ?>">
			<label>Email:</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
			<label>Пароль:</label>
			<input type="password" name="password" value="<?php echo $password; ?>">
			<button type="submit" name="submit">Сохранить изменения</button>
		</form>
	</div>
</body>

</html>