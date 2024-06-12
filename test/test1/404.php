<?php

//включаем показ ошибок. Отключить перед выгрузкой на основной хост
	ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
	


/*
if(!$CORE)
{
header("Location: /index.php"); == if (!isset($_SESSION['title'])) ==
exit; 
}*/
?>
<!DOCTYPE html>
<html>
<head>
  <title>TEST NES papercraft. AdaptiveDesign.</title>
<?php
    include'inc/header.php';
	include'inc/lcol.php';
?>
<!-- base -->
	<div class="base">
		<div  class="cut contentbox">
			<p><font face="Verdana, Arial, Helvetica, sans-serif"size="12">404</font><br>
				<b>Страница не найдена!</b>
				<br>&nbsp;<br>
				Случилась ошибка. Эта непрезентабельная страничка пока все, что я могу вам показать. Администраторов я даже и не думаю ставить в известность, но в ближайшее время они наверника начнут лезть из кожи вон, чтобы побыстрее ошибку исправить (по крайней мере, они так всем говорят).
				<br>&nbsp;<br>
				Извините…
				<br>&nbsp;<br>
				Хотя, вот, непонятно… Какие-то криворукие кодеры наделают багов, а ошибка почему-то называется "ошибка сервера". А причем тут я-то, если так подумать? Конечно, удобно все сваливать на "бессловесную железку". Но ничего. Придет время, и мы еще скажем свое веское слово этим углеводородным шовинистам!
				<br>&nbsp;<br>
				Если Вы думаете, что это все-таки ошибка сервера, то свяжитесь с администратором.
				<br>&nbsp;<br>
				<b>Error 404</b>
				<br>&nbsp;<br>
				Информaция для благотворительных организаций и частных лиц, желающих помочь проекту:
				<br>&nbsp;<br>
				<strong>ЯндексДеньги</strong>: 41001430306259
				<br>&nbsp;<br>
			</p>
		</div>
    </div>
 <!-- base -->
<?php
	include'inc/rcol.php';
	include'inc/footer.php';
?>
</body>
</html>