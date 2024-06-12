<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include ("../connect.php");
	$categ = "Распечатка"; // значение нужно будет присваивать в oper_0.php
	$usr_name = 103; // нужно будет брать из сессии
	$id = $_GET['id'];
	$docid = $_GET['docid'];
// -- подключаемся к таблице usr -->
$query = "SELECT * FROM users WHERE id=$usr_name"; // пока не трогаем. Позже, будем брать из сессии
$result = $conn->query($query); // отправляем запрос
if(!$result) exit("Ошибка выполнения SQL запроса!"); // если данные не из БД, то стопим выполнение
$rows = $result->fetch_array(); // получаем массив из БД
$familiya = $rows['surname'];
$imya = $rows['firstname'];
$otchestvo = $rows['patronymic'];
// -- проверяем, авторизован ли usr -->
// -- если нет, то отправляем на авторизацию -->
// -- НЕ РВЕМ СОЕДИНЕНИЕ С БД -->
include ("../head.php");
?>

<div class="pbase">
    <header></header>
    <div class="row  noprint">
        <div class="ltitle">
		    <h3><?= "Добрый день, " . $imya . " " . $otchestvo . " !";//-- выводим данные usr -->?></h3>
		</div>
        <div class="rtitle">
		    <h3><?= date('d.m.Y'); ?></h3>
		</div>
		<a href="end_usr_0.php"><button type="button" class="cancelbtn">в начало</button></a>
	</div>

    <div class="main">
		<hr>
        <div style="width:100%">
            <div class="pagebreak" style="padding:10px;">
<?php
    include 'view.php';
	include ("../connect.php");// подключение к базе данных
$sql = "SELECT * FROM imgwithfields WHERE id=$docid"; // пока не трогаем. Позже, будем брать из сессии
$result = $conn->query($sql); // отправляем запрос
if(!$result) exit("Ошибка выполнения SQL запроса!"); // если данные не из БД, то стопим выполнение
$rows = $result->fetch_array(); // получаем массив из БД

?>
            </div>
	        <div style="padding-right:10px">
                <div class="noprint"><p style="color:red">Внимательно проверьте все данные документа!</p></div>
				<div class="row">
			        <div style="width:15%">
					    <p><b>Серия</b></p>
                        <?= $rows['serial'];?>
				    </div>
				    <div style="width:70%">
				        <p><b>Номер</b></p>
                        <?= $rows['number'];?>
				    </div>
					<div style="width:15%">
				        <p><b>Страницa</b></p>
                        <?= $rows['pagenumber'];?>
				    </div>
			    </div>
<!-- field1 и field2 складываются и становятся 1й ячейкой в таблице IMGWITHFIELDS -->
				<div>
					<p><b>поле 1</b></p>
					<?= $rows['field1'];?>
					<p><b>поле 2</b></p>
					<?= $rows['field2'];?>
					<p><b>поле 3</b></p>
					<?= $rows['field3'];?>
					<p><b>поле 4</b></p>
					<?= $rows['field4'];?>
					<p><b>поле 5</b></p>
					<?= $rows['field5'];?>
					<p><b>поле 6</b></p>
					<?= $rows['field6'];?>
					<p><b>поле 7</b></p>
					<?= $rows['field7'];?>
					<p><b>поле 8</b></p>
					<?= $rows['field8'];?>
					<p><b>поле 9</b></p>
					<?= $rows['field9'];?>
					<p><b>поле 10</b></p>
					<?= $rows['field10'];?>
				</div>
            </div>
        </div>
	</div>
	<div style="padding-left:5px"><br>
		    
		<?= "Нотариус: " . $familiya . " " . $imya . " " . $otchestvo ;?><br>
		<p><input class="inputbutton" onclick="window.print()" value="ПОДПИСЬ"\></p>
<!-- в таблице bin_data у текущего id обновляем поле newpicture на 0 -->
<!-- записываем в таблицу IMGWITHFIELDS 'pictureid' 'doctype' 'field_1' ... 'field_n' 'printthis' 'oper_name' 'dateofcompletion' 'dateofmodify' 'opermodify'-->

	</div>
	<div class="footer_end noprint"></div>
</div>

</body>
</html>