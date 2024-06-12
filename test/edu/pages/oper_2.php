<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include ("../connect.php");// подключение к базе данных
// -- проверяем, авторизован ли usr -->
// -- если нет, то отправляем на авторизацию -->
    // $categ = "Обработанные изображения"; значение передано из oper_0.php
	$id = 102; //позже, id нужно будет брать из сесси авторизации
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
        <div class="ltitle"><h3><?= $_GET['categ'];?></h3>
		</div>
        <div class="rtitle"><h3><?= date('d.m.Y'); ?></h3>
		</div>
        <a href="oper_0.php"><button type="button" class="cancelbtn">в начало</button></a>
	</div>
    <div style="padding:10px; widht:100%">
	    <hr>
<!-- выводим из авторизации данные usr -->
        <h3><?php echo $rows['surname']; ?><h3>
<!-- подключаемся к таблице NEW_PICTURES -->
<!-- ищем строки со значением null в ячейке newpicture -->
<!-- выводим 'picname' 'category' 'date_of_create' 'newpicture' 'link_to_redactor_page' -->
        <table>
            <tr>
                <th>название</th>
                <th>категория</th>
                <th>дата</th>
                <th>значение</th>
                 <th>действие</th>
            </tr>
<?php
//-- подключаемся к таблице IMGWITHFIELDS -->
//-- ищем строки со значением new в ячейке newpicture -->
//-- выводим 'description' 'category' 'dateofcreate' 'newpicture' 'linktoedit' -->
//-- заполняем таблицу на странице -->
?>
  		        <tr><!-- пока просто возьмем значения из таблицы users, чтобы проверить вывод данных -->
  		            <td><?php echo $rows['username']; ?></td><!-- выбирать названия файлов -->
  		            <td><?php echo $rows['surname']; ?></td><!-- выбирать категории картинок файлов -->
  		            <td><?php echo $rows['firstname']; ?> </td><!-- выбирать дату загрузки файлов -->
  		            <td><?php echo $rows['patronymic']; ?> </td><!-- забыл, зачем это поле. Наверное, чтобы показать, что картинка новая ))) -->
  		            <td><!-- передаем ID в обработчик oper_work.php --><a href="oper_work1.php?id=8&categ=Редактирование"><button style="width:auto;">редактировать</button></a></td>
  		        </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td><a href="oper_work.php"><button style="width:auto;">редактировать</button></a></td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td><a href="oper_work.php"><button style="width:auto;">редактировать</button></a></td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td><a href="oper_work.php"><button style="width:auto;">редактировать</button></a></td>
            </tr>

        </table>
    </div>
    <div style="padding-left:5px"><a href="oper_1.php">
	    <button style="width:auto;">обработать новый файл</button></a>
    </div>
    <div class="footer_oper"></div>
</div>

</body>
</html>