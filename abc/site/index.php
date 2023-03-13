<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Интерактивная карту исторических данных</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <link rel="stylesheet" href="../style/index.css">
  <link rel="shortcut icon" type="image/png" href="../photos/logo.png" />

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
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
  <div id="map"></div>
  <section>
    <h2>Как произошла Великая Отчественная Война</h2>
    <p>Великая Отечественная Война была самой крупной и кровопролитной войной в истории России, которая началась 22 июня
      1941 года и закончилась 9 мая 1945 года. Эта война произошла в результате нацистской агрессии Германии против
      Советского Союза.</p>
    <p>После того, как Германия аннексировала Австрию и Чехословакию в 1938-1939 годах, Германский руководитель Адольф
      Гитлер планировал захватить всю Европу. В сентябре 1939 года Германия напала на Польшу, что привело к началу
      Второй мировой войны.</p>
    <p>В 1941 году Германия быстро захватила Францию и начала готовиться к войне против Советского Союза. В июне 1941
      года нацистская Германия атаковала Советский Союз, начав наступление на территорию Советской Украины и Белоруссии.
      Этот фронт получил название «Восточный фронт».</p>
    <p>Начало войны было крайне трудным для Советского Союза. Немецкие войска быстро продвигались на восток, захватывая
      один город за другим. Но сопротивление советских войск оказалось неожиданно жестким, и нацисты не смогли
      достигнуть своих целей. Советские войска замедлили наступление Германии и начали контратаки.</p>
    <p>Начало войны было крайне трудным для Советского Союза. Немецкие войска быстро продвигались на восток, захватывая
      один город за другим. Но сопротивление советских войск оказалось неожиданно жестким, и нацисты не смогли
      достигнуть своих целей. Советские войска замедлили наступление Германии и начали контратаки.</p>
    <p>После того, как Германия аннексировала Австрию и Чехословакию в 1938-1939 годах, Германский руководитель Адольф
      Гитлер планировал захватить всю Европу. В сентябре 1939 года Германия напала на Польшу, что привело к началу
      Второй мировой войны.</p>
  </section>
  <footer>
    <div class="footer">
      &copy;Все права защищены.
    </div>
  </footer>
  </div>
  <script>
    var map = L.map('map').setView([55.7522, 37.6156], 5);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    var battle1 = L.marker([55.7522, 37.6156]).addTo(map);
    battle1.bindPopup('<a href="msk.php">Битва за Москву</a>');
    var battle2 = L.marker([47.992649, 36.936462]).addTo(map);
    battle2.bindPopup('<a href="donbas.php">Донбасская операция (1943)</a>');
    var battle3 = L.marker([50.450843, 36.169461]).addTo(map);
    battle3.bindPopup('<a href="bel-har.php">Белгородско-Харьковская стратегическая наступательная операция (1943)</a>');
    var battle4 = L.marker([50.458200, 30.268883]).addTo(map);
    battle4.bindPopup('<a href="kiev.php">Киевская наступательная операция</a>');
    var battle5 = L.marker([54.600712, 31.169097]).addTo(map);
    battle5.bindPopup('<a href="orch.php">Оршанская наступательная операция</a>');
  </script>
</body>

</html>