<?php
session_start(); //стартуем сессию
$CORE = true;// Устанавливаем "маркер", что юзер заходил через главную
$page = ""; // обЪявляем переменную
if (isset($_GET['page'])){ //проверяем наличие переданных данных в запросе
	$page = $_GET['page']; //присваиваем переменной значение запроса
}
else{
	$page = "index"; /*отсекаем подстановку неверных переменных или неправильного запроса, или чистый вход на index*/
}

// зададим "сервисные" сессионные переменные
    $_SESSION['adress'] = 'https://nes1.ru';
	$_SESSION['pagelink'] = 'index.php?page=';

//начинаем проверку переданных в сессию значений переменных
if ($page == "index" or $page == ""){
	
	$_SESSION['dir'] = 'pages';
	$_SESSION['page'] = 'base';
}	

elseif ($page == "complete" or 
        $page == "inwork" or 
		$page == "projekt" or 
		$page == "gallery" or 
		$page == "about" or 
		$page == "tutorials" or 
		$page == "tutorial1" or 
		$page == "tutorial2" or 
		$page == "tutorial3" or 
		$page == "tutorial4" or 
		$page == "tutorial5" or 
		$page == "zakaz" or 
		$page == "betamaster" or 
		$page == "for_hr" or 
		$page == "other"){
	
	$_SESSION['dir'] = 'pages';
	$_SESSION['page'] = $page;
}


/*
    ==
 EVE online
    ==
*/

// в зависимости от названия страницы, указываем название папки

elseif ($page == "merlin"){$_SESSION['subdir'] = 'EVE.Caldari.Merlin';}

elseif ($page == "raven"){$_SESSION['subdir'] = 'EVE.Caldari.Raven';}

elseif ($page == "kestrel"){$_SESSION['subdir'] = 'EVE.Caldari.Kestrel';}

elseif ($page == "evecontainer"){$_SESSION['subdir'] = 'EVE.Cargo.Container';}

elseif ($page == "eveheavymissle"){$_SESSION['subdir'] = 'EVE.Caldari.Heavy.Missle';}

elseif ($page == "ibis"){$_SESSION['subdir'] = 'EVE.Caldari.Ibis';}

elseif ($page == "ibis_new"){$_SESSION['subdir'] = 'EVE.Caldari.Ibis.New';}

elseif ($page == "vexor"){$_SESSION['subdir'] = 'EVE.Gallente.Vexor';}

elseif ($page == "armageddon"){$_SESSION['subdir'] = 'EVE.Armageddon';}

elseif ($page == "drake"){$_SESSION['subdir'] = 'EVE.Caldari.Drake';}

elseif ($page == "osprey"){$_SESSION['subdir'] = 'EVE.Caldari.Osprey';}

elseif ($page == "megathron"){$_SESSION['subdir'] = 'EVE.Megathron';}

elseif ($page == "absolution"){$_SESSION['subdir'] = 'EVE.Absolution';}

elseif ($page == "abaddon"){$_SESSION['subdir'] = 'EVE.Abaddon';}

elseif ($page == "anathema"){$_SESSION['subdir'] = 'EVE.Anathema';}

elseif ($page == "arbitrator"){$_SESSION['subdir'] = 'EVE.Arbitrator';}

elseif ($page == "armageddon"){$_SESSION['subdir'] = 'EVE.Armageddon';}

elseif ($page == "augor"){$_SESSION['subdir'] = 'EVE.Augor';}

elseif ($page == "avatar"){$_SESSION['subdir'] = 'EVE.Avatar';}

elseif ($page == "bantam"){$_SESSION['subdir'] = 'EVE.Caldari.Bantam';}

elseif ($page == "caracal"){$_SESSION['subdir'] = 'EVE.Caldari.Caracal';}

elseif ($page == "condor"){$_SESSION['subdir'] = 'EVE.Caldari.Condor';}

elseif ($page == "cormorant"){$_SESSION['subdir'] = 'EVE.Caldari.Cormorant';}

elseif ($page == "shuttle"){$_SESSION['subdir'] = 'EVE.Caldari.Shuttle';}

elseif ($page == "rifter"){$_SESSION['subdir'] = 'EVE.Rifter';}

elseif ($page == "scorpion"){$_SESSION['subdir'] = 'EVE.Scorpion';}

elseif ($page == "tayra"){$_SESSION['subdir'] = 'EVE.Tayra';}


/*
    ==
 LineAge 2
    ==
*/
 
elseif ($page == "rudolf"){$_SESSION['subdir'] = 'LA2.Rudolf';}

elseif ($page == "doll"){$_SESSION['subdir'] = 'LA2.Kukla';}

elseif ($page == "nimi"){$_SESSION['subdir'] = 'LA2.Nimi';}

elseif ($page == "axi"){$_SESSION['subdir'] = 'LA2.Axi';}

elseif ($page == "laded"){$_SESSION['subdir'] = 'LA2.Ded';}

elseif ($page == "lacat"){$_SESSION['subdir'] = 'LA2.Cat';}

elseif ($page == "dommdt"){$_SESSION['subdir'] = 'LA2.Dom.1';}

elseif ($page == "domik"){$_SESSION['subdir'] = 'LA2.Dom.2';}

elseif ($page == "lakisa"){$_SESSION['subdir'] = 'LA2.Kisa';}

elseif ($page == "uni"){$_SESSION['subdir'] = 'LA2.Unicorn';}

elseif ($page == "castlegir"){$_SESSION['subdir'] = 'LA2.Giran.Castle';}

elseif ($page == "angelslayer"){$_SESSION['subdir'] = 'LA2.Angel.Slayer';}

elseif ($page == "dragonslayer"){$_SESSION['subdir'] = 'LA2.Dragon.Slayer';}

elseif ($page == "sirasblade"){$_SESSION['subdir'] = 'LA2.Siras.Blade';}

elseif ($page == "yaxa"){$_SESSION['subdir'] = 'LA2.Yaxa.Mace';}

elseif ($page == "sarnga"){$_SESSION['subdir'] = 'LA2.Sarnga';}

elseif ($page == "samurailongsword"){$_SESSION['subdir'] = 'LA2.Samurai.Long.Sword';}

elseif ($page == "fps"){$_SESSION['subdir'] = 'LA2.Full.Plate.Shield';}

elseif ($page == "ics"){$_SESSION['subdir'] = 'LA2.Imperial.Crusade.Shield';}

elseif ($page == "kiteshield"){$_SESSION['subdir'] = 'LA2.Kite.Shield';}

elseif ($page == "doomshield"){$_SESSION['subdir'] = 'LA2.Doom.Shield';}

elseif ($page == "ashenwand"){$_SESSION['subdir'] = 'TL.Ashen.Wand';}

elseif ($page == "bie"){$_SESSION['subdir'] = 'TL.Beryl.Iron.Eclipse';}

elseif ($page == "bbs"){$_SESSION['subdir'] = 'TL.Braced.Bulwark.Shield';} 

elseif ($page == "cyclophead"){$_SESSION['subdir'] = 'TL.Cyclop';}

elseif ($page == "fpshiv"){$_SESSION['subdir'] = 'TL.Fiery.Polished.Shiv';}

elseif ($page == "pwcat"){$_SESSION['subdir'] = 'PW.Cat.Trader';}

elseif ($page == "falloutpups"){$_SESSION['subdir'] = 'Fallout3.Pups';}

elseif ($page == "d3topor"){$_SESSION['subdir'] = 'D3.Topor.i.Pen';}

elseif ($page == "d3StoneSword"){$_SESSION['subdir'] = 'D3.Stone.Sword';}

else{
	$_SESSION['dir'] = 'inc';
	$_SESSION['page'] = '404';
    }
// собираем страницу
?>
<!DOCTYPE html>
<html lang="ru_RU">
<head>
<?php
	include'inc/data.inc.php';
	include'inc/header.php';
	include'inc/lcol.php';
	include($_SESSION['dir']."/".$_SESSION['subdir']."/".$_SESSION['page'].".php");
	include'inc/rcol.php';
	include'inc/footer.php';

session_destroy();
?>
</html>