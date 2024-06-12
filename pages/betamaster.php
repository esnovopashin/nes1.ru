<?php
if(!$CORE)
{
header("Location: /index.php");/*if (!isset($_SESSION['title']))*/
exit;
}
	
$adress = $_SESSION['adress'];
$dir = $_SESSION['dir'];
//$title = $_SESSION['title'];
$adress = $adress.$dir.'/';
$alting = 'alt="'.$title. '" title="'.$title.'"';
//echo '<title>'.$title.'</title>';

?>

<!-- base -->
	<div class="base">
		<div  class="cut contentbox">
			<p style="padding-bottom:10px"><?=$welcome?>!</p>
			<p style="padding-bottom:10px">Чтобы увидеть, где и что идет не так, где моделист будет испытывать трудности, какая деталь не сходится/ненадежна, разработчику нужно знать об этом на этапе подготовки.<br>
			Как понимаете, для выпуска качественной, достойной к публикации модели, необходимо поработать ручками.</p>
			<p style="padding-bottom:10px">В виду полнейшей занятости и более серъезному подходу к моделированию/коррекции моделей (а для этого тоже нужно достаточно много времени), требуе(ю)тся бета-сборщик(и).</p>
			<p style="padding-bottom:10px">Работать будем над косм.аппаратами из EVE online (Crucible/Incarna/Incursion)
			Все проекты, как и финальные варианты моделей, <b>бесплатны</b>.</p>
			<p style="padding-bottom:10px">В данный момент, необходим бета-тест <a href="models/EVE.Caldari.Ibis/bp_ibis_old_iso_800_w1.jpg" rel="zoom">Ibis (old)</a> /Caldari</p>
			<p style="padding-bottom:10px">В дальнейшем, на стапель встанут<br>
			<a href="models/EVE.Caldari.Kestrel/bp_kestrel_iso_800_w.jpg" rel="zoom">Kestrel</a> /Caldari<br>
			<a href="models/EVE.Armageddon/blueprint_armageddon_iso31_w.jpg" rel="zoom">Armageddon</a> /Amarr<br>
			<a href="models/EVE.Abaddon/blueprint_abaddon_0.jpg" rel="zoom">Abaddon</a> /Amarr<br>
			<a href="models/EVE.Megathron/blueprint_megathron_0.jpg" rel="zoom">Megathron</a> /Gallente<br>
			<a href="models/EVE.Rifter/blueprint_rifter_0.jpg" rel="zoom">Rifter</a> /Minmatar<br>
			<a href="models/EVE.Caldari.Raven/bp_raven_iso_s1_w.jpg" rel="zoom">Raven</a> /Caldari <font color=red><b>завершен</b></font><br>
			<a href="models/EVE.Caldari.Drake/bp_Drake_iso_s1_w.jpg" rel="zoom">Drake</a> /Caldari<br>
			<a href="models/EVE.Caldari.Ibis/blueprint_ibis.new4_800_w.jpg" rel="zoom">Ibis (new)</a> /Caldari<br>
			<a href="models/EVE.Caldari.Caracal/Caracal.jpg" rel="zoom">Caracal</a> /Caldari<br>
			<a href="models/EVE.Caldari.Merlin/merlin_blueprint1_R_w.jpg" rel="zoom">Merlin</a> /Caldari <font color=red><b>завершен</b></font><br>
			Детализация довольно простая.</p>
			<p style="padding-bottom:10px">Если все сложится удачно, можно будет сделать варианты и "для мастеров" - с усложненной детализацией.<br>
			Дальше, "как попрет"</p>
			<p style="padding-bottom:10px">От меня:<br>
				- Файлы с деталями<br>
				- Внимательное отношение к замечаниям: если у Вас возникли трудности в сборке, значит, они возникнут и у другого<br>
				- Достаточно быстрое реагирование<br>
				- Онлайн 2-3 часа, вечером (с 21 до 00 мск)<br>
				- Обязательное упоминание о Вас в авторстве работ (естественно, если от Вас будет вклад в работу над проектом)<br>
				- Право на <b>некоммерческое</b> распространение конечной версии модели
			</p>
			<p style="padding-bottom:10px">От Вас (на мой e-mail):<br>
				- опыт работы с бумагой, моделлинга, сборки моделей<br>
				- опыт работы с МАКСом<br>
				- ссылки на опубликованные темы/страницы с процессом сборки Ваших моделей (не менее 3х)<br>
				- наличие домашнего принтера<br>
				- сколько времени Вы может уделять работе над проектом?<br>
				- сколько времени Вы сможете быть онлайн?<br>
				- какие виды работ Вы сможете выполнять дополнительно (коррекция текстур и т.п.)?<br>
				- Ваши координаты : e-mail, номер icq, контакт в мессенджере (на Ваш выбор) 
			</p>
			<script type="text/javascript" src="//yandex.st/share/share.js"charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
		</div>
    </div>
 <!-- base -->
