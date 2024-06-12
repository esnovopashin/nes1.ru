<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
	$categ = "Выбор шаблонов";

    include ("../connect.php");// подключение к базе данных
	$id = 101; // позже, id будем получать из сесси при авторизации
// -- подключаемся к таблице usr -->
    $query = "SELECT * FROM users WHERE id=$id"; // пока не трокаем
//mysql_query('set  names utf8_general_ci');
    $result = $conn->query($query); // отправляем запрос
    if(!$result) exit("Ошибка выполнения SQL запроса!"); // если данные не из БД, то стопим выполнение
        $rows = $result->fetch_array(); // получаем мвссив из БД


// -- НЕ РВЕМ СОЕДИНЕНИЕ С БД -->

?>
<html>
<head>

    <meta http-equiv="content-language" content="ru">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="expires" content="0">
	<title><?= $categ;?></title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<div class="base">
    <header></header>
    <div class="row">
		<div class="ltitle">
			<h3><?php echo "Добрый день, " . $rows['firstname'] . " " . $rows['patronymic'] . " !";?></h3>
		</div>
		<div class="rtitle">
			<h3><?= date('d.m.Y'); ?></h3>
		</div>
		<div style="padding:10px;width:100%;">
			<hr>Выберите шаблон, соответствующий теме изображения</br>
		</div>
		<div class="row" style="width:100%">
			<div class="tmplt"><a href="tmpl_1.php?categ=Comics">Comics</a></div>
			<div class="tmplt"><a href="tmpl_2.php?categ=Pictures">Pictures</a></div>
			<div class="tmplt"><a href="tmpl_3.php?categ=Распечатки">Распечатки</a></div>
		</div>
	</div>
	<footer></footer>
</div>

</body>
</html>