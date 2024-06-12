<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include ("../connect.php");// подключение к базе данных
// -- проверяем, авторизован ли usr -->
// -- если нет, то отправляем на авторизацию -->
    $categ = "Стартовая перевода"; // значение нужно будет присваивать в oper_0.php
	$id = 102; // позже, id будем получать из сесси при авторизации
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

?>
<html>
<head>

    <meta http-equiv="content-language" content="ru">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="expires" content="0">
    <title>Стартовая перевода</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="modal.css">

</head>

<body>
<div class="base">
    <header></header>
    <div class="main row">
<!-- выводим данные usr -->
        <div class="ltitle"">
		    <h3><?= "Добрый день, " . $rows['firstname'] . " " . $rows['patronymic'] . " !";?></h3>
		</div>
        <div class="rtitle"><h3><?= date('d.m.Y'); ?></h3>
		</div>
        <div style="padding:10px;width:100%;">
		    <hr>
			С чем будем работать?</br>
        </div>
 	    <div class="row" style="width:100%">
            <div style="width:50%;">
                <a href="oper_1.php?categ=Новые изображения">
				    <button type="button" class="cancel" style="background:#f44336">ВЗЯТЬ НОВОЕ ЗАДАНИЕ</button>
				</a>
            </div>
	        <div style="width:50%;">
	            <a href="oper_2.php?categ=Редактировать">
				    <button type="button">РЕДАКТИРОВАТЬ</button>
			    </a>
	        </div>
        </div>
	    <a class="escape" onclick="document.getElementById('id02').style.display='block'">ВЫЙТИ</a>
	</div>
    <div class="footer_oper"></div>
</div>

<div id="id02" class="modal" style="display:none;">
  
  <form class="modal-content animate" action="#">
    <div class="closemodal">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <div style="width:100%">
        <h3 style="text-align:center;">ЗАКОНЧИТЬ РАБОТУ?</h3>
      </div>
	  <div class="row" style="width:100%">
      <div style="width:50%;">
        <button type="button" class="cancel" style="background:#f44336" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">НЕТ</button>
      </div>
	  <div style="width:50%;"><a href="thnks_2.php"><button type="button">ДА</button></a></div>
    </div>
    </div>
    <div class="container" style="background-color:#f1f1f1">
    </div>
  </form>
</div>


</body>
</html>