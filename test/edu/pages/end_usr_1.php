<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include ("../connect.php");// подключение к базе данных
// -- проверяем, авторизован ли usr -->
// -- если нет, то отправляем на авторизацию -->
    $categ = "Новые документы"; // значение нужно будет присваивать в end_usr_0.php
include ("../head.php");
?>
<div class="base">
	<header></header>
	<div class="row">
		<div class="ltitle"><h3><?= $categ ?></h3></div>
		<div class="rtitle"><h3><?= date('d.m.Y'); ?></h3></div>
	<a href="end_usr_0.php"><button type="button" class="cancelbtn">в начало</button></a>
	</div>
	<div class="main">
		<hr>
<!--
*** подключимся к таблице IMGWITHFIELDS ***
проверяем наличие флага "new" ячейки printthis. Если есть, то
-- циклом выводим название таблицы и 1ю строку из таблицы с результатами, содержащюю 'категория' 'дата создания таблицы' 'printthis'
-- крайний правый столбец "действие" должен иметь кнопку для перехода на шаблон для проверки содержимого талицы
пагинацию не делаем сознательно, чтобы видеть все новые документы и понимать объем предстоящей работы -->
<?php
		echo '<table>';
			echo '<tr>';
				echo '<th>номер</th>';
				echo '<th>страница</th>';
				echo '<th>тип</th>';
				echo '<th>дата</th>';
				echo '<th>значение</th>';
				echo '<th>действие</th>';
			echo '</tr>';
//-- подключаемся к таблице IMGWITHFIELDS -->
//-- ищем строки со значением new в ячейке newpicture и сортируем по возрастанию id 
$docdata = "SELECT id, serial, number, pagenumber, doctype, dateofcreate, printthis, pictureid FROM imgwithfields";
$result = $conn->query($docdata);
if(!$result) exit("Ошибка выполнения SQL запроса!"); // если данные не из БД, то стопим выполнение
//-- в цикле выводим 'description' 'doctype' 'dateofcreate' 'newpicture'

// -- заполняем таблицу на странице -->
   if ($result->num_rows > 0) { //начинаем с 1 строки
        // Выводим данные каждой строки. Разбивку по цвету делает css
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
	            echo "<td> " . $row['serial'] . "-" . $row['number'] . "</td>";
	            echo "<td> " . $row['pagenumber'] . "</td>";
				echo "<td> " . $row['doctype'] . "</td>";
                echo "<td> " . $row['dateofcreate'] . "</td>";
                echo "<td> " . $row['printthis'] . "</td>";
                echo '<td><a href="end_usr_print.php?docid=' . $row["id"] . '&id=' . $row["pictureid"] . '&categ=Печать"><button style="width:auto;">распечатать</button></a></td>';// где id - номер строки с переводом, pictureid - номер строки с картинкой из binary_data, которую переводили
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
     <div class="footer_end"></div>
</div>

</body>
</html>
