<html>
<head>

    <meta http-equiv="content-language" content="ru">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="expires" content="0">
    <title>вывод li</title>

</head>

<body>
<style>
body {font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";}
</style>
<!-- https://intop24.ru/article_15_lesson_4.php
     https://daruse.ru/vyivod-dannyix-iz-mysql-v-php
-->
<table>
  <tr>
    <th>название</th>
    <th>категория</th>
    <th>дата</th>
  </tr>
<?php
include('connect.php');     
// Выбрать данные
$sql = "SELECT id, img_name, category FROM images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   /* Выводим данные каждой строки
   while($row = $result->fetch_assoc()) {
       echo "<br>id:" . $row["id"];
	   echo "<br>Имя: " . $row["img_name"];
       echo	"<br>Пасс: " . $row["user"];
	   echo "<br>";
    */
	   // Выводим данные каждой строки
   while($row = $result->fetch_assoc()) {
       echo "<tr>";
	   echo "<td>id:" . $row["id"] . "</td>";
	   echo "<td>Имя: " . $row["img_name"] . "</td>";
       echo	"<td>Пасс: " . $row["category"] . "</td>";
	   echo "</tr>";
    }
}
/*else {
   echo "0 результат";
}
*/
echo "</table>";
include('close.php'); 
?>

</body>
</html>