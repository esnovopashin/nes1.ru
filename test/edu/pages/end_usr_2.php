<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include ("../connect.php");// подключение к базе данных
// -- проверяем, авторизован ли usr -->
// -- если нет, то отправляем на авторизацию -->
    $categ = "Распечатаны ранее"; // значение нужно будет присваивать в end_usr_0.php
	$id = 103; // позже, id будем получать из сесси при авторизации
// -- подключаемся к таблице usr -->
    $query = "SELECT * FROM users WHERE id=$id"; // пока не трокаем
//mysql_query('set  names utf8_general_ci');
    $result = $conn->query($query); // отправляем запрос
    if(!$result) exit("Ошибка выполнения SQL запроса!"); // если данные не из БД, то стопим выполнение
        $rows = $result->fetch_array(); // получаем мвссив из БД
// $nametopage = $rows['username'];
// $familiya = $rows['surname'];
// $imya = $rows['firstname'];
// $otchestvo = $rows['patronymic'];
// выводим текст

// -- НЕ РВЕМ СОЕДИНЕНИЕ С БД -->
include ("../head.php");
?>

<div class="base">
	<header></header>
	<div class="row">
		<div class="ltitle"><h3><?= $categ ?></h3>
		</div>
		<div class="rtitle"><h3><?= date('d.m.Y'); ?></h3>
		</div>
	<a href="end_usr_0.php"><button type="button" class="cancelbtn">в начало</button></a>
	</div>
	<div class="main">
		<hr>
		<table>
			<tr>
				<th>название</th>
				<th>категория</th>
				<th>дата</th>
				<th>значение</th>
				<th>действие</th>
			</tr>
			<tr>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td><button style="width:auto;">просмотр</button></td>
			</tr>
			<tr>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td><button style="width:auto;">просмотр</button></td>
			</tr>
			<tr>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td><button style="width:auto;">просмотр</button></td>
			</tr>
			<tr>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td><button style="width:auto;">просмотр</button></td>
			</tr>

		</table>
  </div>


<div class="footer_end"></div>
</div>

</body>
</html>