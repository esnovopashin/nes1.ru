<?php
//-- http://jokerboard.org/blog/p6-pishem_skript_katalog_tovarov_na_Php_i_MySql_chast_2.html -->
$host="mysql0.locum.ru";        #Хост
$login_mysql="nss_nes1ru57";      #Логин
$password_mysql="Ot9z1Ota";       #Пароль
$baza_name="nss_nes1ru57";   #Имя базы
// сединяемся
$conn = mysqli_connect("$host", "$login_mysql", "$password_mysql", "$baza_name");
// mysqli_query("set  names utf8_general_ci");
// проверяем
if (!$conn) {
    die("<p>К сожалению, не доступен сервер MySQL</p>" . $conn->connect_error);
}
else
{
	echo ( "!");
}
// установка нужной кодировки == https://php.ru/manual/mysqli.set-charset.html
if (!$conn->set_charset("utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", $conn->error);
}

//-- нужно прикрутить валидатор переданных данных и шифрование передаваемых -->
?>
