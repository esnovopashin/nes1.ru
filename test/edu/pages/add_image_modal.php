<!-- в этом файле, после передачи данных в БД, выводится модальное окно с выбором дальнейшего действия -->
<?php
    // включим оповещение об ошибках
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

	
// Код, который будет выполняться, если форма была оправлена:
if ($_POST['submit']) {

    // открываем временный файл на чтение и добавляем /
    $data = base64_encode(fread(fopen($_FILES['file']['tmp_name'], "r"), filesize($_FILES['file']['tmp_name']))); 
    $_POST['form_description'] = trim($_POST['form_description']);
    $size = filesize($_FILES['file']['tmp_name']);
// добавить проверку на размер файла и графический ли он?
// если нет - то вернуть на исходную страницу
    // подключение к базе данных
    include ("../connect.php");
    $result=$conn->prepare("INSERT INTO binary_data (description,bin_data,filename,filesize,filetype) 
    "."VALUES ('".$_POST['form_description']."',
               '".$data."',
               '".$_FILES["file"]["name"]."',
               '".$size."',
               '".$_FILES["file"]["type"]."'
			   )"
	);
// добавить внесение в базу значения category или doctype в зависимости от шаблона загружаемого документа
//    header('Location: tmpl_1.php');
    if(!$result) exit("Ошибка выполнения SQL запроса!");
 
    $result->execute(); 

}

else {
  // если что-то пошло не так
echo 'что-то пошло не так' ;
}
include('../close.php');
?> 
<html>
<link rel="stylesheet" type="text/css" href="modal.css">
<body>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="#">
    <div class="closemodal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>

    <div class="container">
      <div style="width:100%">
        <h3 style="text-align:center;">загрузить еще 1 файл?</h3>
      </div>
	  <div class="row" style="width:100%">
      <div style="width:50%;">
        <a href="tmpl_0.php"><button type="button" class="cancel" style="background:#f44336">Отмена</button></a>
      </div>
	  <a href="tmpl_1.php"><div style="width:50%;"><button type="button">Загрузить</button></a></div>
    </div>
    </div>
    <div class="container" style="background-color:#f1f1f1">
    </div>
  </form>
</div>

</body>
</html>