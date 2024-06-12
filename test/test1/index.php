<?php
session_start(); //стартуем сессию
$CORE = true;// Устанавливаем "маркер", что юзер заходил через главную
$page = ""; 
if (isset($_GET['page'])){ //проверяем наличие переданных данных в запросе
	$page = $_GET['page']; //присваиваем переменной значение запроса
}
else{
	$page = "index"; /*отсекаем подстановку неверных переменных или неправильного запроса, или чистый вход на index*/
}
?>
<!DOCTYPE html>
<html>
	<head>

<?php	

//начинаем проверку переданных в сессию переменных
    $adress = "https://nes1.ru/";
    $_SESSION['adress'] = $adress;

if ($page == "index" or $page == ""){
	
	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$page = "base";
	$_SESSION['page'] = $page;
	include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	//echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}	

elseif ($page == "complete"){
	
	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$page = "complete";
	$_SESSION['page'] = $page;
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	//echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "inwork"){
	
	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$page = "inwork";
	$_SESSION['page'] = $page;
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	//echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "inprojekt"){
 	
	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$page = "projekt";
	$_SESSION['page'] = $page;
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	    
	//echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "gallery"){
		
	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$page = "gallery";
	$_SESSION['page'] = $page;
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	        
	//echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "about"){
	
	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$page = "about";
	$_SESSION['page'] = $page;
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	//echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "tutorials"){
	
	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$page = "tutorials";
	$_SESSION['page'] = $page;
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	//echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "tutorial1"){
	
	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$page = "tut_1";
	$_SESSION['page'] = $page;
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	//echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "tutorial2"){
	
	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$page = "tut_2";
	$_SESSION['page'] = $page;
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "tutorial3"){
	
	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$page = "tut_3";
	$_SESSION['page'] = $page;
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "zakaz"){
	
	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$page = "zakaz";
	$_SESSION['page'] = $page;
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	   
	//echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "other"){
 
	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$subdir = "some";
	$_SESSION['subdir'] = $subdir;
	$page = "some";
	$_SESSION['page'] = $page;
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	//echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "beta"){

	$dir = "pages";
	$_SESSION['dir'] = $dir;
	$page = "betamaster";
	$_SESSION['page'] = $page;
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	//echo '<title>'.$title.'</title>';
	include($_SESSION['dir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "merlin"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "EVE.Caldari.Merlin";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "evecontainer"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "EVE.Cargo.Container";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "eveheavymissle"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "EVE.Caldari.Heavy.Missle";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "ibis"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "EVE.Caldari.Ibis";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "rudolf"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Rudolf";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "doll"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Kukla";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "nimi"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Nimi";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "axi"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Axi";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "laded"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Ded";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "lacat"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Cat";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "dommdt"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Dom.1";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "domik"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Dom.2";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "lakisa"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Kisa";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "uni"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Unicorn";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "castlegir"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Giran.Castle";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "angelslayer"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Angel.Slayer";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "dragonslayer"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Dragon.Slayer";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "sirasblade"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Siras.Blade";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "yaxa"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Yaxa.Mace";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "sarnga"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Sarnga";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "samurailongsword"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Samurai.Long.Sword";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "fps"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Full.Plate.Shield";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "ics"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Imperial.Crusade.Shield";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "kiteshield"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Kite.Shield";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "doomshield"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "LA2.Doom.Shield";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "ashenwand"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "TL.Ashen.Wand";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "bie"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "TL.Beryl.Iron.Eclipse";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "bbs"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "TL.Braced.Bulwark.Shield";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
} 

elseif ($page == "cyclophead"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "TL.Cyclop";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}
elseif ($page == "fpshiv"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "TL.Fiery.Polished.Shiv";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}


elseif ($page == "pwcat"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "PW.Cat.Trader";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "falloutpups"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "Fallout3.Pups";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

elseif ($page == "d3topor"){

	$dir = "models";
	$_SESSION['dir'] = $dir;
	$subdir = "D3.Topor.i.Pen";
	$_SESSION['subdir'] = $subdir;
	$page = "model.page";
	$_SESSION['page'] = $page;
	/*передаем в сессию адрес, дирректорию и поддиректорию, название файла, которые будем использовать в вызываемом файле*/
    include'inc/data.inc.php';
    include'inc/header.php';
	include'inc/lcol.php';
	
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php"); /*используем переданные в сессию значения переменных*/
}

else{
	$dir = "inc";
	$_SESSION['dir'] = $dir;
	$page = "404";
	$_SESSION['page'] = $page;
	include'inc/data.inc.php';
	include'inc/header.php';
	include'inc/lcol.php';
	include'inc/404.php';
}
	include'inc/rcol.php';
	include'inc/footer.php';

session_destroy();
?>

	</body>
</html>
