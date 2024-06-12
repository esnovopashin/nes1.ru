<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include ("../connect.php");// подключение к базе данных

	//$categ=$_GET['categ'];
	
// вставить присвоение категорий в зависимости от выбранного варианта в tmpl_0
    include ("../head.php");
?>
    <div class="base">
    <header></header>
        <div class="row">
            <div class="ltitle">
                <h3><?= $_GET['categ']; ?></h3>
            </div>
            <div class="rtitle">
			    <h3><?= date('d.m.Y'); ?></h3>
			</div>
			<a href="tmpl_0.php"><button type="button" class="cancelbtn">в начало</button></a>

            <div class="main">
			    <hr>
<?php
            echo "<table>";
                echo "<tr>";
                    echo "<th>название</th>";
                    echo "<th>исходное название файла</th>";
                    echo "<th>ID</th>";
                echo "</tr>";
    // Выбрать данные
    $sql = "SELECT id, description, filename FROM binary_data"; // соединяемся с нужной базой и выбираем нужные поля
    $result = $conn->query($sql);
    if ($result->num_rows > 0) { //начинаем с 1 строки
        // Выводим данные каждой строки. Разбивку по цвету делает css
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
	            echo "<td> " . $row["description"] . "</td>";
	            echo "<td> " . $row["filename"] . "</td>";
                echo "<td> " . $row["id"] . "</td>";
	        echo "</tr>";
        }
    }
    /*else {
        echo "0 результат";
    }
    */
        	echo "</table>";
	mysqli_close($conn);
?>
            </div>
            <div class="form"><br>
				<form method="POST" action="add_image_modal.php" enctype="multipart/form-data">
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                    <label for="file">Выберите файл (только JPG, PNG или GIF)</label>
                    <p><input class="ltitle" type="file" name="file" required /></p>
                    <p><label for="file">Укажите серию и номер, разделив их "-" (например: XIIВГ-22222222)</label>
                    <input type="text" placeholder="Введите название" name="form_description" required /></p>
					<input class="inputbutton" type="submit" name="submit" value="Отправить">
                </form>
            </div>
        </div>
    <footer></footer>
    </div>
<?php
//  var_dump($result);
//  echo isset($result['field'])?$result['fielf']:'shit';
//  чтобы увидеть содержимое запроса
?>

</body>
</html>