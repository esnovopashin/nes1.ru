<!-- в этом файле, после передачи данных в БД, выводится модальное окно с выбором дальнейшего действия -->
<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

	
// Код, который будет выполняться, если форма была оправлена:
    /* Проверяем, существуют ли переменные $_POST и если существуют, тогда обрабатываем данные POST от пользователя и переопределяем переменные, присвоив им отфильтрованные значения от пользователя
    */
    if(isset($_POST['serial'])
		&& isset($_POST['number'])
		&& isset($_POST['pagenumber'])
		&& isset($_POST['field1'])
		&& isset($_POST['field2'])
		&& isset($_POST['field3'])
		&& isset($_POST['field4'])
		&& isset($_POST['field5'])
		&& isset($_POST['field6'])
		&& isset($_POST['field7'])
		&& isset($_POST['field8'])
		&& isset($_POST['field9'])
		&& isset($_POST['field10'])
		&& isset($_POST['printthis'])
		&& isset($_POST['oper_name'])
		&& isset($_POST['pictureid'])
	) {

	function clean($value = "") {
    $value = trim($value); // для удаления пробелов из начала и конца строки
    $value = stripslashes($value); // для удаления экранированных символов типа ' ""
    $value = strip_tags($value); // для удаления HTML и PHP тегов
    $value = htmlspecialchars($value); // преобразует специальные символы в HTML-сущности ('&' преобразуется в '&amp;' и т.д.)
    $value = htmlentities($value);
    return $value; // даем возможность вывести данные
}
        
		$serial = clean($_POST ['serial']);
		$number = clean($_POST ['number']);
		$pagenumber = clean($_POST ['pagenumber']);
		$field1 = clean($_POST ['field1']);
		$field2 = clean($_POST ['field2']);
		$field3 = clean($_POST ['field3']);
		$field4 = clean($_POST ['field4']);
		$field5 = clean($_POST ['field5']);
		$field6 = clean($_POST ['field6']);
		$field7 = clean($_POST ['field7']);
		$field8 = clean($_POST ['field8']);
		$field9 = clean($_POST ['field9']);
		$field10 = clean($_POST ['field10']);
		$printthis = clean($_POST ['printthis']);
		$oper_name = clean($_POST ['oper_name']);
		$pictureid = clean($_POST ['pictureid']);

        /**
        * Вставка в базу данных
        */
	    // подключение к базе данных
    include ("../connect.php");
        $result=$conn->prepare("INSERT INTO imgwithfields (
		serial,
		number,
		pagenumber,
		field1,
		field2,
		field3,
		field4,
		field5,
		field6,
		field7,
		field8,
		field9,
		field10,
		printthis,
		oper_name,
		pictureid)
		"."VALUES(
		'$serial',
		'$number',
		'$pagenumber',
		'$field1',
		'$field2',
		'$field3',
		'$field4',
		'$field5',
		'$field6',
		'$field7',
		'$field8',
		'$field9',
		'$field10',
		'$printthis',
		'$oper_name',
		'$pictureid'
		)");
        

    if(!$result) exit("Ошибка выполнения SQL запроса!");
 
    $result->execute(); 

}

else {
echo 'something wrong' ;
}
include('../close.php');
header('Location: oper_1.php');
?>
