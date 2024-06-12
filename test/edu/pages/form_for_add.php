<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-language" content="ru">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="expires" content="0">
    <title>form for submit</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

  // https://janicky.com/stati/sohranenie-izobrazhenij-v-baze-dannyh-mysql
// Код, который будет выполняться, если форма была оправлена:
if ($_POST['submit']) {
    // подключение к базе данных
    include ("../connect.php");
    // экранируем полученную строку
    $data = addslashes(fread(fopen($_FILES['file']['tmp_name'], "r"), // открываем временный файл на чтение
    filesize($_FILES['file']['tmp_name'])));
    $_POST['form_description'] = trim($_POST['form_description']);  // проверяем на подмену
    $size = filesize($_FILES['file']['tmp_name']);
    $result=$conn->prepare("INSERT INTO binary_data (description,bin_data,filename,filesize,filetype) 
    "."VALUES ('".$_POST['form_description']."',
    '".$data."',
    '".$_FILES["file"]["name"]."',
    '".$size."',
    '".$_FILES["file"]["type"]."')");
 
    if(!$result) exit("Ошибка выполнения SQL запроса!");  // если что-то пошло не так
 
    $result->execute(); 
/*       $id = $conn->prepare();
 
    echo "<p>Этот файл имеет следующий идентификатор (ID) в базе данных: <b>" . $id . "</b>";
*/
} 

else {
  // отображаем форму для отправки новых данных:
?>
<div class="base">
<header></header>
<div class="main row">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
Описание файла: <input type="text" name="form_description" size="40">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
Файл для загрузки/хранения в базе данных: <input type="file" name="file" size="40">
<p><input type="submit" name="submit" value="Отправить">
</form>
  </div>
<footer></footer>
</div>

<?php
}
include('../close.php');

?> 



</body>
</html>