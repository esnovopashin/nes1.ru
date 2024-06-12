<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-language" content="ru">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="expires" content="0">
    <title>check</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<!-- http://php720.com/lesson/45 -->
<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
 // функция для очистки полей от косячного ввода
function clean($value = "") {
    $value = trim($value); // для удаления пробелов из начала и конца строки
    $value = stripslashes($value); // для удаления экранированных символов типа ' ""
    $value = strip_tags($value); // для удаления HTML и PHP тегов
    $value = htmlspecialchars($value); // преобразует специальные символы в HTML-сущности ('&' преобразуется в '&amp;' и т.д.)
    $value = htmlentities($value);
    return $value; // даем возможность вывести данные
}
 // функция для проверки длинны строки
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	// проверяем не пустые ли поля
	if(!empty($name) && !empty($surname) && !empty($email) && !empty($message)) {
    // если поля не пустые, продолжаем
		$name = clean($name); // прогоняем через clean
		$surname = clean($surname); // прогоняем через clean
		$email = clean($email); // прогоняем через clean
		$message = clean($message); // прогоняем через clean
		$email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); //  проверяем почту на валидность
		// проверяем длину введенных строк
	    if(check_length($name, 2, 25) && check_length($surname, 2, 50) && check_length($message, 2, 1000) && $email_validate) {
	        echo "Спасибо за сообщение<br>";
			echo $name . "<br>"; 
			echo $surname . "<br>";
			echo $email . "<br>";
			echo $message . "<br>";
	    }
		else {
	        echo "Введенные данные некорректные";
	    }
	} 
	else {
	    echo "Заполните пустые поля";
	}
}


?>












</body>
</html>