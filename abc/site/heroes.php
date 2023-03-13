<?php
session_start();

// Параметры подключения к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$link = mysqli_connect($servername, $username, $password, $dbname);

// Проверяем соединение
if (mysqli_connect_errno()) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
}

// Выбираем таблицу photos
$table_name = 'photos';
mysqli_select_db($link, $table_name);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../photos/logo.png" />
    <link rel="stylesheet" href="../style/heroes.css">
    <title>Герои Великой Отечественной Войны</title>
</head>

<body>
    <div class="photo-verx"></div>
    <div class="photo-fon">
        <header>
            <h1>Герои Великой Отечественной Войны</h1>
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

        <form action="Photo.php" method="POST">
            <div class="container">

                <div class="fon_ger">
                    <div class="txt-fio">
                        <?php
                        $id = 1; // задаем ID фотографии, которую хотим вывести

                        $result = mysqli_query($link, "SELECT id, filename, caption FROM photos WHERE id=$id");

                        // Выводим найденную фотографию
                        if ($row = mysqli_fetch_assoc($result)) {
                            echo "<div>";
                            echo "<img src='" . $row["filename"] . "'>";
                            echo "</div>";
                        }

                        // Освобождаем память
                        mysqli_free_result($result);
                        ?>
                        <h2>Корзун Андрей <br> Григорьевич</h2>
                    </div>
                    <a href="./korzyn.php">(подробнее)</a>
                    <p>Андрей Григорьевич Корзун (12 декабря (25 декабря) 1911, деревня Дуброва Гомельской области — 5
                        ноября 1943, Ленинград) — советский артиллерист, кавалер ордена Ленина, Герой Советского Союза
                        (1944, посмертно).</p>


                </div>
                <div class="fon_ger">
                    <div class="txt-fio">
                        <?php
                        $id = 2; // задаем ID фотографии, которую хотим вывести

                        $result = mysqli_query($link, "SELECT id, filename, caption FROM photos WHERE id=$id");

                        // Выводим найденную фотографию
                        if ($row = mysqli_fetch_assoc($result)) {
                            echo "<div>";
                            echo "<img src='" . $row["filename"] . "'>";
                            echo "</div>";
                        }

                        // Освобождаем память
                        mysqli_free_result($result);
                        ?>
                        <h2>Голиков Леонид <br> Александрович</h2>
                    </div>
                    <a href="./golikov.php">(подробнее)</a>
                    <p>Пионер-герой, тимуровец, участник Великой Отечественной войны, партизан, Герой Советского Союза
                        (посмертно).</p>
                </div>
                <div class="fon_ger">
                    <?php
                    $id = 3; // задаем ID фотографии, которую хотим вывести
                    $result = mysqli_query($link, "SELECT id, filename FROM photos WHERE id=$id");
                    // Выводим найденную фотографию
                    if ($row = mysqli_fetch_assoc($result)) {
                        echo "<div>";
                        echo "<img src='" . $row["filename"] . "'>";
                        echo "</div>";
                    }
                    // Освобождаем память
                    mysqli_free_result($result);
                    ?>
                    <div class="txt-fio">
                        <h2>Матросов Александр<br>Матвеевич</h2>
                    </div>
                    <a href="./matrosov.php">(подробнее)</a>
                    <p> Герой Советского Союза (19 июня 1943), красноармеец, стрелок-автоматчик 2-го отдельного
                        стрелкового батальона 91-й отдельной Сибирской добровольческой бригады имени И. В. Сталина 6-го
                        Сталинского Сибирского добровольческого стрелкового корпуса оперативной группы генерала
                        Герасимова Калининского фронта, член ВЛКСМ.</p>
                </div>
                <div class="fon_ger">
                    <div class="txt-fio">
                        <?php
                        $id = 4; // задаем ID фотографии, которую хотим вывести

                        $result = mysqli_query($link, "SELECT id, filename FROM photos WHERE id=$id");

                        // Выводим найденную фотографию
                        if ($row = mysqli_fetch_assoc($result)) {
                            echo "<div>";
                            echo "<img src='" . $row["filename"] . "'>";
                            echo "</div>";
                        }

                        // Освобождаем память
                        mysqli_free_result($result);
                        ?>
                        <h2>Портнова Зинаида<br>Мартыновна</h2>
                    </div>
                    <a href="./partanova.php">(подробнее)</a>
                    <p> Пионер-герой, советская подпольщица, партизанка, член подпольной организации «Юные мстители»;
                        разведчица партизанского отряда имени К. Е. Ворошилова на оккупированной гитлеровцами территории
                        Белорусской ССР. Герой Советского Союза (1958).</p>
                </div>
                <div class="fon_ger">
                    <div class="txt-fio">
                        <?php
                        $id = 5; // задаем ID фотографии, которую хотим вывести

                        $result = mysqli_query($link, "SELECT id, filename FROM photos WHERE id=$id");

                        // Выводим найденную фотографию
                        if ($row = mysqli_fetch_assoc($result)) {
                            echo "<div>";
                            echo "<img src='" . $row["filename"] . "'>";
                            echo "</div>";
                        }

                        // Освобождаем память
                        mysqli_free_result($result);
                        ?>
                        <h2>Гастелло Николай<br>Францевич</h2>
                    </div>
                    <a href="./gastello.php">(подробнее)</a>
                    <p> Советский военный лётчик, участник трёх войн, в момент гибели занимал должность командира 2-й
                        эскадрильи 207-го дальнебомбардировочного авиационного полка 42-й дальнебомбардировочной
                        авиационной дивизии 3-го дальнебомбардировочного авиационного корпуса Дальнебомбардировочной
                        авиации ВВС РККА в звании капитана. Погиб во время боевого вылета. Герой Советского Союза,
                        посмертно.</p>
                </div>
                <div class="fon_ger">
                    <div class="txt-fio">
                        <?php
                        $id = 6; // задаем ID фотографии, которую хотим вывести

                        $result = mysqli_query($link, "SELECT id, filename FROM photos WHERE id=$id");

                        // Выводим найденную фотографию
                        if ($row = mysqli_fetch_assoc($result)) {
                            echo "<div>";
                            echo "<img src='" . $row["filename"] . "'>";
                            echo "</div>";
                        }

                        // Освобождаем память
                        mysqli_free_result($result);
                        ?>
                        <h2>Маресьев Алексей<br> Петрович</h2>
                    </div>
                    <a href="./maresiev.php">(подробнее)</a>
                    <p>Cоветский военный лётчик-истребитель. Герой Советского Союза (24.08.1943). Полковник (1978).
                        Кандидат исторических наук (1956).

                        Во время Великой Отечественной войны у него были ампутированы обе ступни, но несмотря на это, он
                        вернулся на службу. Всего за время войны совершил 86 боевых вылетов, сбил 10 самолётов врага:
                        три — до ранения и семь — после.</p>
                </div>
        </form>
    </div>
    <footer class="footer">
        &copy;Все права защищены.
    </footer>

    </footer>
</body>

</html>