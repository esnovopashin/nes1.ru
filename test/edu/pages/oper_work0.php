<!-- подключаемся к таблице usr -->
<!-- проверяем, авторизован ли usr -->
<!-- если нет, то отправляем на авторизацию -->
<!-- НЕ РВЕМ СОЕДИНЕНИЕ С БД -->
<html>
<head>

    <meta http-equiv="content-language" content="ru">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="expires" content="0">
    <title>Заполнение форм</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
*, *:after, *:before {
  box-sizing: border-box;}
.base {
  margin: 0 auto;
  padding:0px;
  width: 100%;
  background: white;
  max-width: 1280px;
  box-shadow: 0 0 10px #000000;
}
.row {
  display: flex;
  flex-wrap: wrap;
}
.footer_oper {
  height:5px;
  padding: 5px 0;
  background: #ff9900;
  color: white;
}
body {font-family: Arial, Helvetica, sans-serif;}
.firstwindow {
  width: 250px;
    height: 250px;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
  border: 1px solid #888;
}
/* Полная ширина для всех полей ввода */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Стили для всех кнопок */
button {
  background-color: #0066ff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Кнопка отмены */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* закрываюший крестик */
.closemodal {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: box; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Модальное окно */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Анимация */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
.row {
  display: flex;
  flex-wrap: wrap;
}
/* для маленьких экранов 
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
*/
</style>

<div class="base">
    <header></header>
    <div class="main row">
<!-- выводим данные usr -->
        <div style="width:50%;height:50px;text-align:left;padding-left:5px">
		    <h3>Добрый день, $surname, $firstname,  $patronymic !</h3>
		</div>
        <div style="width:50%;height:50px;text-align:right;padding-right:5px">
		    <h3><?= date('d.m.Y'); ?></h3>
		</div>
        <div style="padding:10px;width:100%;">
		    <hr>Пожалуйста, заполните все поля формы</br>
        </div>
 	    <div class="row" style="width:100%">
            <div style="width:50%;padding:10px;">
<!-- Подключаемся к таблице -->
<!-- соответствии с переданным значением ID выводим картинку -->
<?php
// включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    include 'view1.php'; // показываем картинку
?>
				<!-- <img src="#" style="background:grey">Здесь выводится выбранная картинка</img> -->
            </div>
	        <div style="width:50%;padding-right:5px">
                <label for="pole1"><b>поле 1</b></label>
                <input type="text" placeholder="заполните поле" name="pole1">
                <label for="pole2"><b>поле 2</b></label>
                <input type="text" placeholder="заполните поле" name="pole2">
                <label for="pole3"><b>поле 3</b></label>
                <input type="text" placeholder="заполните поле" name="pole3">
                <label for="pole4"><b>поле 4</b></label>
                <input type="text" placeholder="заполните поле" name="pole4">
                <label for="pole5"><b>поле 5</b></label>
                <input type="text" placeholder="заполните поле" name="pole5">
                <label for="pole6"><b>поле 6</b></label>
                <input type="text" placeholder="заполните поле" name="pole6">
                <label for="pole7"><b>поле 7</b></label>
                <input type="text" placeholder="заполните поле" name="pole7">
                <label for="pole8"><b>поле 8</b></label>
                <input type="text" placeholder="заполните поле" name="pole8">
            </div>
        </div>
        <div style="padding-left:5px">
		    <a href="oper_2.php">
			    <button style="width:auto;">ПОДПИСАТЬ</button>
<!-- записываем в таблицу IMGWITHFIELDS 'lnk_to_img_from_bin_data' 'oper_name' 'field_1' ... 'field_n' -->
			</a>
		</div>
    </div>
    <div class="footer_oper"></div>
</div>

</body>
</html>