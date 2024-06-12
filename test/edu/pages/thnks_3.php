<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include ("../connect.php");// подключение к базе данных
	$categ="Спасибо за работу!";
	$id = 103;
// -- подключаемся к таблице usr -->
$query = "SELECT * FROM users WHERE id=$id"; // пока не трогаем
//mysql_query('set  names utf8_general_ci');
$result = $conn->query($query); // отправляем запрос
if(!$result) exit("Ошибка выполнения SQL запроса!"); // если данные не из БД, то стопим выполнение
$rows = $result->fetch_array(); // получаем мвссив из БД
// $nametopage = $rows['username'];
// $familiya = $rows['surname'];
// $imya = $rows['firstname'];
// $otchestvo = $rows['patronymic'];
// выводим текст
// -- проверяем, авторизован ли usr -->
// -- если нет, то отправляем на авторизацию -->
// -- НЕ РВЕМ СОЕДИНЕНИЕ С БД -->
include ("../head.php");
?>
<div class="base">
    <header></header>
    <div class="main row">
        <div class="ltitle"><h3><?php echo "Всего доброго, " . $rows['firstname'] . " " . $rows['patronymic'] . " !";?></h3></div>
        <div class="rtitle"><h3><?= date('d.m.Y'); ?></h3></div>
  <div style="padding:10px;width:100%;"><hr><h3>Спасибо за работу!<h3></br>
  </div>
</div>
<div class="footer_end"></div>
</div>

</body>
</html>