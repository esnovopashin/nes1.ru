<html>
<head>
  <title>NES papercraft. поиск</title>
  <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="https://nes1.ru/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="http://test.nes1.ru/1024/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
  <script src="//yastatic.net/share2/share.js" async="async"></script>
</head>
<!-- Основа кода страницы и css получена отсюда:
     https://html5book.ru/adaptivnaya-vyorstka-sayta/ -->
	 <!-- в процессе самообучения доработано и изменено под текущий проект -->
<?php
   include'../inc/header.php';
?>

<!--
#######################################################################

	/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + +
	+         Название: | PHPru_Search                           +
	+ ---------------------------------------------------------- + 
	+           Версия: | 2.4                                    +
	+        Стоимость: | бесплатный скрипт                      +
	+       Требования: | PHP4                                   +
	+        Платформа: | любая                                  +
	+             Язык: | русский                                +
	+            Автор: | Alex (http://www.phpru.net)            +
	+   Copyright 2003: | PHPru.net™ - All Rights Reserved.      +
	+ ---------------------------------------------------------- + 
	+         Обновлен: | 27 июня 2004                           +
	+ + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */ 

#######################################################################
-->
<div class="container">
    <div class="posts-list">
   <article id="post-6" class="post">
<div class="post-content">
Вы искали: <B>
<?
require ('sinc/func_list.php');
$CONFIG = file('sinc/sconfig.php'); // файл конфигурации

if (isset($_POST["query"]))
{
echo htmlspecialchars(trim($_POST["query"])).'</B></CENTER>';
$microtime = microtime();
$microsecs = substr($microtime, 2, 8);
$secs = substr($microtime, 11);
$start_time = "$secs.$microsecs";
$sizetotal = 0;

if ( ereg ( "[><?]+", $_POST["query"], $error_1 ))
{
?>
<BR>Найдены запрещенные символы в строке запроса - ( <FONT COLOR=BLUE><?=htmlspecialchars($error_1[0])?></FONT> )
<BR><BR>
</div>
<?
	exit;
}
if (strlen(trim($_POST["query"])) < 3)
{
?>
<BR>Слишком короткие запросы не обрабатываются. Используйте не менее 3 символов.
<BR><BR>
</div>
<?
	exit;
}
$searchstring = trim($_POST["query"]);
$searchword = explode (" ",$searchstring); // массив строки запроса
$allwords = count($searchword); // сколько слов в запросе

##################################################################

$FILE = file('sdata/search.php');
$count = count($FILE);
PHPruSearch('..','rus');
for ($x = 0; $x < $count; $x++) // выбираем файл
{
	list($filename,$filesize,$content,$modify) = explode('^!^',$FILE[$x],4);
	$temp = explode('%^%',$content);
	$true = $find = $full_result = $long = 0;
	$sizetotal += $filesize;
		
	foreach($temp as $key => $value) // выбираем строку
	{
		if($allwords > 1) // если более одного слова в запросе
		{
			if(preg_match_all("/".$searchstring."/i", $value, $ok, PREG_PATTERN_ORDER))
				$new = str_replace($ok[0][0],'<FONT COLOR='.trim($CONFIG[2]).'>'.trim($CONFIG[6]).$ok[0][0].'</FONT>'.trim($CONFIG[7]), $value);
			else
				$new = $value;
			if($new != $value)
			{
				$find++;
				$true = 1;
				$show[$find] = $new;
				$full_result++; 
			}
		}
		for ($all = 0; $all < $allwords; $all++) // проходим по каждому из слов в запросе
		{	
			$chekfull = explode(" ",$value);
			if(in_array($searchword[$all],$chekfull))
				$full_result++;	
			
			$long = strlen($searchword[$all]);
			if ($long > 5)
			{
			if(preg_match("/(у|ы|а|о|я|е|и)$/i", $searchword[$all]))
				$long = -1;
			if(preg_match("/(и|е|о|а|ы|у)[еямюйивх]$/i", $searchword[$all]))
				$long = -2;
			$short = substr($searchword[$all],0,$long);
			if(preg_match_all("/".$short."/i", $value, $ok, PREG_PATTERN_ORDER))
				$new = str_replace($ok[0][0],'<FONT COLOR='.trim($CONFIG[2]).'>'.trim($CONFIG[6]).$ok[0][0].'</FONT>'.trim($CONFIG[7]), $value);
			else
				$new = $value;

				if($new != $value)
				{
					$find++;
					$true = 1;
					$show[$find] = $new;
				}
			}
			else
			{
				$short = $searchword[$all];
				if(preg_match_all("/".$short."/i", $value, $ok, PREG_PATTERN_ORDER))
					$new = str_replace($ok[0][0],'<FONT COLOR='.trim($CONFIG[2]).'>'.trim($CONFIG[6]).$ok[0][0].'</FONT>'.trim($CONFIG[7]), $value);
				else
					$new = $value;
				if($new != $value)
				{
					$find++;
					$true = 1;
					$show[$find] = $new;
				}
			}
		}	
	}
	if ($true !== 0)
	{
		$fulltrue = 1;
		echo '<BR><BR><B>'.$filename.'</B><BR><I>дата последнего обновления документа - '.$modify.', размeр - '.$filesize.'Kb</I><BR> найдено '.$find.' совпадений ( точных - '.$full_result.', похожих - '.($find-$full_result).')<BR>среди них такие как:';
		
		if ($find > trim($CONFIG[1])) // ограничение количества выводимых строк
			$STROK = trim($CONFIG[1]);
		else
			$STROK = $find;
		for ($a = 1; $a < $STROK+1; $a++) // выводим совпадения построчно
		{
			echo '<LI>...'.$show[$a].'...</LI>';
		}
	}
}

if(!isset($fulltrue))
	echo '<BR>К сожалению, по Вашему запросу ничего не найдено!';

echo '<BR><BR><CENTER>всего обработано '.$sizetotal.'Kb в '.$count.' файлах за ';
$microtime = microtime();
$microsecs = substr($microtime, 2, 8);
$secs = substr($microtime, 11);
$end_time = "$secs.$microsecs";
$total = round(($end_time - $start_time),2);
echo $total.' сек. <BR><BR>';
PHPruRw(); flush();
if (isset($_SERVER["REMOTE_ADDR"]))
	$IP = $_SERVER["REMOTE_ADDR"];
else
	$IP = 'нет данных';
$NEW = time().'^^'.$searchstring.'^^'.$_SERVER["HTTP_REFERER"].'^^'.$IP."\r\n";
PHPruSave($NEW,'sinc/query.php','a+');
}
else
	echo 'Запрос на поиск не поступал!<BR><BR><CENTER>';
?>
<BR>
</div>
</div>
<?php
   include'../inc/lcol.php';
   include'../inc/footer.php'; 
?>

<script>
$('.nav-toggle').on('click', function(){
$('#menu').toggleClass('active');
});
</script>
</body>
</html>