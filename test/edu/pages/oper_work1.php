<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include ("../connect.php");// подключение к базе данных
	$categ = "Заполнение форм"; // значение нужно будет присваивать в oper_0.php
	$printthis = "new";
	$id = 102; // нужно будет брать из сессии
// -- подключаемся к таблице usr -->
$query = "SELECT * FROM users WHERE id=$id"; // пока не трогаем. Позже, будем брать из аутентификации
$result = $conn->query($query); // отправляем запрос
if(!$result) exit("Ошибка выполнения SQL запроса!"); // если данные не из БД, то стопим выполнение
$rows = $result->fetch_array(); // получаем массив из БД
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
    <div class="row">
        <div class="ltitle">
		    <h3><?php echo "Добрый день, " . $rows['firstname'] . " " . $rows['patronymic'] . " !";//-- выводим данные usr -->?></h3>
		</div>
        <div class="rtitle">
		    <h3><?= date('d.m.Y'); ?></h3>
		</div>
		<a href="oper_0.php"><button type="button" class="cancelbtn">в начало</button></a>
	</div>

    <div class="main">
		<hr>
        <div class="row" style="width:100%">
            <div style="width:50%;padding:10px;">
<?php
//-- соответствии с переданным значением ID выводим картинку -->
// включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    include 'view.php'; // показываем картинку
?>
            </div>
	        <div style="width:50%;padding-right:10px">
                <p>Пожалуйста, заполните все поля формы</p>			
			    <div class="row">
			        <div>
				        <label for="pole1"><b>Серия</b></label>
                        <input style="width:100%" type="text" placeholder="заполните поле" name="pole1" recuired />
				    </div>
				    <div>
				        <label for="pole2"><b>Номер</b></label>
                        <input style="width:100%" type="text" placeholder="заполните поле" name="pole2"  recuired />
				    </div>
			    </div>
<!-- pole1 и pole2 складываются, переводятся в транслит и становятся 1й ячейкой imgname в таблице IMGWITHFIELDS -->
            <div>
<!-- поле 2 должно содержать ссылку на текущую img из таблицы binary_data -->
<!-- следующие поля идут последовательно, занимая соответствующие номера ячеек IMGWITHFIELDS -->
				<input type="hidden" name="printthis" value="<?php //htmlspecialchars($printthis); ?>"><!-- скрытое поле с подготовленным значением "new" в ячейке printthis -  ставим флаг, что перевод новый -->
				<input type="hidden" name="oper_name" value="<?php //htmlspecialchars($oper_name); ?>"><!-- скрытое поле с подготовленным значением "oper_name" в ячейке opername, берем из аутентификации -->
				<input type="hidden" name="dateofcreate" value="<?php //htmlspecialchars($dateofcreate); ?>"><!-- скрытое поле с текущей датой для записи в ячейку dateofcreate -->				
				<input type="hidden" name="category" value="<?php //htmlspecialchars($category); ?>"><!-- скрытое поле с текущей датой для записи в ячейку category -->
				<label for="pole3"><b>поле 3</b></label>
                <input type="text" placeholder="заполните поле" name="pole3"  recuired />
                <label for="pole4"><b>поле 4</b></label>
                <input type="text" placeholder="заполните поле" name="pole4"  recuired />
                <label for="pole5"><b>поле 5</b></label>
                <input type="text" placeholder="заполните поле" name="pole5"  recuired />
                <label for="pole6"><b>поле 6</b></label>
                <input type="text" placeholder="заполните поле" name="pole6"  recuired />
                <label for="pole7"><b>поле 7</b></label>
                <input type="text" placeholder="заполните поле" name="pole7"  recuired />
                <label for="pole8"><b>поле 8</b></label>
                <input type="text" placeholder="заполните поле" name="pole8"  recuired />
                <label for="pole9"><b>поле 9</b></label>
                <input type="text" placeholder="заполните поле" name="pole9"  recuired />
                <label for="pole10"><b>поле 10</b></label>
                <input type="text" placeholder="заполните поле" name="pole10"  recuired />
<!-- по умолчанию в ячейке printthis записывается со значением "new"  -->
				<input type="hidden" name="oper_name" value="<?php //htmlspecialchars($oper_name); ?>"><!-- скрытое поле с подготовленным значением "oper_name" в ячейке opername, берем из аутентификации -->
				<input type="hidden" name="dateofcreate" value="<?php //htmlspecialchars($dateofcreate); ?>"><!-- скрытое поле с текущей датой для записи в ячейку dateofcreate -->
			</div>
            </div>
        </div>
	</div>
		<div style="padding-left:5px">
		    
			<label for="podpis"><?= "Перевод выполнил: " . $rows['surname'] . " " . $rows['firstname'] . " " . $rows['patronymic'] ;?></label><br>
			 <a href="oper_2.php">
			 <button style="width:auto;">ПОДПИСАТЬ</button>
<!-- записываем в таблицу IMGWITHFIELDS 'lnk_to_img_from_bin_data' 'field_1' ... 'field_n' 'printthis' 'oper_name' -->
			</a>
	    </div>
		<div class="footer_oper"></div>
</div>

</body>
</html>