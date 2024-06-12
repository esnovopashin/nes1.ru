<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include ("../connect.php");// подключение к базе данных
	$categ = "Заполнение форм"; // значение нужно будет присваивать в oper_0.php
	$oper_name = 102; // нужно будет брать из сессии
	$pictureid = $_GET['id'];
	$id = 102; // id оператора. Позже, будем брать из сессии
// -- подключаемся к таблице usr -->
$query = "SELECT * FROM users WHERE id=$id"; // пока не трогаем. Позже, будем брать из сессии
$result = $conn->query($query); // отправляем запрос
if(!$result) exit("Ошибка выполнения SQL запроса!"); // если данные не из БД, то стопим выполнение
$rows = $result->fetch_array(); // получаем массив из БД
// -- проверяем, авторизован ли usr -->
// -- если нет, то отправляем на авторизацию -->
// -- НЕ РВЕМ СОЕДИНЕНИЕ С БД -->
include ("../head.php");
?>
<div class="base">
    <header></header>
    <div class="row">
        <div class="ltitle">
		    <h3><?= "Добрый день, " . $rows['firstname'] . " " . $rows['patronymic'] . " !";//-- выводим данные usr -->?></h3>
		</div>
        <div class="rtitle">
		    <h3><?= date('d.m.Y'); ?></h3>
		</div>
		<a href="oper_0.php"><button type="button" class="cancelbtn">в начало</button></a>
	</div>
<!-- начало шаблона -->
    <div class="main">
		<hr>
        <div class="row" style="width:100%">
            <div style="width:50%;padding:10px;">
<?php
//-- соответствии с переданным значением ID выводим картинку -->
    include 'view.php';
?>
            </div>
	        <div style="width:50%;padding-right:10px">
                <p>Пожалуйста, заполните все поля формы</p>
				<form id="passport" action="add_img_with_fields.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div style="width:15%">
							<label for="serial"><b>Серия</b></label>
							<input type="text" placeholder="xxxx" name="serial" required />
						</div>
						<div style="width:70%">
							<label for="number"><b>Номер</b></label>
							<input type="text" placeholder="xxxxxx" name="number"  required />
						</div>
						<div style="width:15%">
							<label for="pagenumber"><b>Страница</b></label>
							<input type="text" placeholder="x" name="pagenumber"  required />
						</div>
					</div>
					<div>
			<!-- Всем лейблам нужно будет присвоить текст полей из документа.
			Если это будет иностранный язык, нужно будет использовать вырезанные из документа изображения -->
						<label for="field1"><b>поле 1</b></label>
						<input type="text" placeholder="заполните поле" name="field1"  required />
						<label for="field2"><b>поле 2</b></label>
						<input type="text" placeholder="заполните поле" name="field2"  required />
						<label for="field3"><b>поле 3</b></label>
						<input type="text" placeholder="заполните поле" name="field3"  required />
						<label for="field4"><b>поле 4</b></label>
						<input type="text" placeholder="заполните поле" name="field4"  required />
						<label for="field5"><b>поле 5</b></label>
						<input type="text" placeholder="заполните поле" name="field5"  required />
						<label for="field6"><b>поле 6</b></label>
						<input type="text" placeholder="заполните поле" name="field6"  required />
						<label for="field7"><b>поле 7</b></label>
						<input type="text" placeholder="заполните поле" name="field7"  required />
						<label for="field8"><b>поле 8</b></label>
						<input type="text" placeholder="заполните поле" name="field8"  required />
						<label for="field9"><b>поле 9</b></label>
						<input type="text" placeholder="заполните поле" name="field9"  required />
						<label for="field10"><b>поле 10</b></label>
						<input type="text" placeholder="заполните поле" name="field10"  required />
						<input type="hidden" name="printthis" value="new">
						<input type="hidden" name="oper_name" value="<?= $oper_name; ?>">
						<input type="hidden" name="pictureid" value="<?= $pictureid; ?>">
					</div>
			    </form>
            </div>
        </div>
	</div>
	<div style="padding-left:5px">
		<label for="podpis"><?= "Перевод выполнил: " . $rows['surname'] . " " . $rows['firstname'] . " " . $rows['patronymic'] ;?></label><br>
		<p><input class="inputbutton" type="submit" name="submit" value="ПОДПИСАТЬ" form="passport"></p>
<!-- в таблице bin_data у текущего id обновляем поле newpicture на 0 -->
<!-- записываем в таблицу IMGWITHFIELDS 'pictureid' 'doctype' 'field_1' ... 'field_n' 'printthis' 'oper_name' 'dateofcompletion' 'dateofmodify' 'opermodify'-->

	</div>
	<div class="footer_oper"></div>
</div>

</body>
</html>