<?php
if(!$CORE)
{
header("Location: /index.php");
exit;
}
	
$dir = $_SESSION['dir'];
$pagelink = $_SESSION['pagelink'];
$alting = 'alt="'.$title. '" title="'.$title.'"';

?>
<div class="base">
    <div class="cut contentbox">
        <h2>Модельная Лаборатория</h2><br>
        <?=$welcome?>!
			  
	    <br>&nbsp;<br>
        <p>Тут Вы можете найти или заказать бумажные модели персонажей, строений, монстров, предметов из Lineage 2 // техники из EVE online, других игр
	    <br>
        Бумажные модели раздела <a href="<?=$pagelink?>inprojekt" title="перейти">в проекте <i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a> - заказаны или хочется сделать.
        <br>
        Бумажные модели раздела <a href="<?=$pagelink?>inwork" title="перейти">в работе <i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a> - в данный момент разрабатываются или корректируются
        <br>
        Бумажные модели раздела <a href="<?=$pagelink?>complete" title="перейти">готово <i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a> - готовы, протестированы, разобраны по категориям, имеют инструкции по сборке
        <br>
		Бумажные модели, представленные в <a href="<?=$pagelink?>gallery" title="перейти">галерее <i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a> - это все модели, что сделал на данный момент. Обратите внимание, что некоторые из них не имеют инструкции по сборке. подробную информацию можно получить на странице интересующей Вас модели
        <br>
		<small>Сайт создается с помощью нейронок, в качестве помощника, консультанта (Aria в браузере Opera, а также <a href=""https://chat.deepseek.com/coder title="deepseek">deepseek</a>) и <a href="https://codepen.io/pen/" title="CodePen">CodePen <i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a>, контент в ДОработке.
		И это - моя опытная площадка в "сайтострое". Простите, если что не так, ну или черкните в почту, что исправить.</small></p>
    </div>

 <?php include 'news.php'; ?>

    <div class="cut contentbox">
        <p>На сей день, все бумажные модели из раздела <a href="<?=$pagelink?>gallery">готово/собрано <i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a>, представленные тут, бесплатны. Скачать их можно, так же бесплатно.<br>Заранее просим прощения за возможные задержи при разработке новой, отсутсвующей в галерее, модели. Это связано с большим количеством заявок и отсутствием желаемо бОльшего времени у разработчиков. Спасибо за Ваше понимание.</p><br>
		<p>Приветствуется сотрудничество. е-майл внизу страницы.</p>&nbsp;<br>
	</div>  

</div>
