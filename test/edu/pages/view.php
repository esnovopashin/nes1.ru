<?php
// включим оповещение об ошибках
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
// обозначим переменные
	$data="";
	$type="";
	$id=$_GET['id']; // ждем получения id картинки. Сделать проверку на пустое (или осутствующее в БД) значение - все закрыть и выкинуть юзера нахрен, записав данные посетителя в лог.

// скрипт-обработчик БД и извлечение из нее нужной картинки
	$query = "SELECT bin_data,filetype from binary_data WHERE id=$id";
	$result = $conn->query($query); // отправляем запрос
 
	if(!$result) exit("Ошибка выполнения SQL запроса!"); // если данные не из БД, то стопим выполнение
 
		$row = $result->fetch_array(); // получаем мвссив из БД
		$data = $row['bin_data']; // выводим картинку
// скрипт-обработчик БД и извлечение из нее нужной картинки
		echo '<img class="print" style="width:100%" src="data:image/'.$row['filetype'].';base64,'.$data.'">'; // показываем картинку
mysqli_close($conn); //рвем соединение
?>