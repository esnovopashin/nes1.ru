<!-- http://jokerboard.org/blog/p6-pishem_skript_katalog_tovarov_na_Php_i_MySql_chast_2.html -->
<?php
$host="mysql5.locum.ru";        #Хост
$login_mysql="nss_test81";      #Логин
$password_mysql="NyJGkl3h5Y";       #Пароль
$baza_name="nss_test81";   #Имя базы
$db = @mysql_connect("$host", "$login_mysql", "$password_mysql");
mysql_query('set  names utf8mb4_general_ci');
if (!$db) exit("<p>К сожалению, не доступен сервер MySQL</p>");
if (!@mysql_select_db($baza_name,$db)) exit("<p>К сожалению, не доступна база данных</p>");      
?>
<!-- нужно прикрутить валидатор переданных данных и шифрование передаваемых -->