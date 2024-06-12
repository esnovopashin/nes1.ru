<!-- https://intop24.ru/article_15_lesson_4.php
     https://daruse.ru/vyivod-dannyix-iz-mysql-v-php
-->
<?php
include('connect.php');     
    $result = mysql_query("SELECT * FROM `users`",$db);
do{
    echo "ID - ".$myrow['id']."<br>";
    echo "Имя - ".$myrow['username']."<br>";
    echo "Пароль - ".$myrow['password']."<br>";
	// или можно так
//	printf("ID - %s<br>Имя - %s<br>Пас - %s<br><br>",$myrow['id'],$myrow['username'],$myrow['password']);
	// или так
//	echo "ID - ".$myrow['id']."<br>Имя - ".$myrow['username']."<br>Паспорт -".$myrow['password']."<br><br>";
  }
while ($myrow = mysql_fetch_array($result));
include('close.php'); 
?>