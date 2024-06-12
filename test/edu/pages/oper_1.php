<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include ("../connect.php");// подключение к базе данных
// -- проверяем, авторизован ли usr -->
// -- если нет, то отправляем на авторизацию -->
    // $categ = "Новые изображения"; значение передано из oper_0.php
	$id = 102; //позже, id нужно будет брать из сесси авторизации
// -- подключаемся к таблице usr -->
/*
$query = "SELECT * FROM users WHERE id=$id"; // пока не трогаем
//mysql_query('set  names utf8_general_ci');
$result = $conn->query($query); // отправляем запрос
if(!$result) exit("Ошибка выполнения SQL запроса!"); // если данные не из БД, то стопим выполнение
$rows = $result->fetch_array(); // получаем мвссив из БД

/ $nametopage = $rows['username'];
/ $familiya = $rows['surname'];
/ $imya = $rows['firstname'];
/ $otchestvo = $rows['patronymic'];
/ выводим текст
*/
// -- НЕ РВЕМ СОЕДИНЕНИЕ С БД -->
include ("../head.php");
?>
<div class="base">
    <header></header>
    <div class="row">
        <div class="ltitle"><h3><?= $_GET['categ'];?></h3></div>
        <div class="rtitle"><h3><?= date('d.m.Y'); ?></h3></div>
        <a href="oper_0.php"><button type="button" class="cancelbtn"><b>в начало</b></button></a>
        <div class="main">
		    <hr>
<?php
            echo "<table>";
                echo "<tr>";
                    echo "<th>название</th>";
                    echo "<th>категория</th>";
                    echo "<th>дата</th>";
					echo "<th>значение</th>";
					echo "<th>действие</th>";
                echo "</tr>";
//-- подключаемся к таблице bin_data -->
//-- ищем строки со значением new в ячейке newpicture и сортируем по возрастанию id 
$bindt = "SELECT id, description, category, dateofcreate, newpicture FROM binary_data WHERE newpicture='new'";
$result = $conn->query($bindt);
if(!$result) exit("Ошибка выполнения SQL запроса!"); // если данные не из БД, то стопим выполнение
//-- в цикле выводим 'description' 'category' 'dateofcreate' 'newpicture'

// -- заполняем таблицу на странице -->
   if ($result->num_rows > 0) { //начинаем с 1 строки
        // Выводим данные каждой строки. Разбивку по цвету делает css
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
	            echo "<td> " . $row["description"] . "</td>";
	            echo "<td> " . $row["category"] . "</td>";
                echo "<td> " . $row["dateofcreate"] . "</td>";
                echo "<td> " . $row["newpicture"] . "</td>";
                echo '<td><a href="oper_work.php?id=' . $row["id"] . '&categ=Перевод"><button style="width:auto;">обработать</button></a></td>';
	        echo "</tr>";
        }
    }
    //else {
    //    echo "0 результат";
    //}
          echo "</table>";
mysqli_close($conn);
?>

        </div>

    </div>
     <div class="footer_oper"></div>
</div>

</body>
</html>