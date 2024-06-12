<?php
if(!$CORE)
{
header("Location: /index.php");
exit;
}
	
$adress = $_SESSION['adress'];
$dir = $_SESSION['dir'];
$pagelink = $_SESSION['pagelink'];
$adress = $adress.$dir.'/';

?>

<!-- base -->
<div class="base">
 <!-- postbox -->
    <div class="cut wow fadeInUp" data-wow-offset="50">
		<img src="img/post_tut_1_610.jpg" width="100%" alt="">
		<br>
		<h3>Как импортировать модель из игры и сделать развертку</h3>
		<p>&nbsp;</p>
		<p style="padding: 0 10px">3D Ripper DX. Вытягиваем 3D модель из сцены в игре. Правим под развертывание в Pepakura. Собираем листы разверток и верстаем выпуск бумажной модели для печати. Почти пошаговая инструкция.</p>
		<p>&nbsp;</p>
		<div class="dash"></div>
        <a class="more-link" href="<?=$pagelink?>tutorial1">Подробнее</a>
    </div>
<!-- postbox -->
    <div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	</div>
 <!-- postbox -->
    <div class="cut wow fadeInUp" data-wow-offset="50">
		<img src="img/post_tut_2_610.jpg" width="100%" alt="">
		<br>
		<h3>Переработка модели из игры. Каркас и разбивка на детали</h3>
		<p>&nbsp;</p>
		<p style="padding: 0 10px">Как сделать модель крепче? Как разбить будущую модель на детали так, чтобы было легче собирать?<br>
		В этом уроке показано, где и как разместить каркас внутри будущей модели на примере разборки фрегата из EVE online.</p>
		<p>&nbsp;</p>
		<div class="dash"></div>
        <a class="more-link" href="<?=$pagelink?>tutorial2">Подробнее</a>
    </div>
<!-- postbox -->
    <div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	</div>
 <!-- postbox -->
    <div class="cut wow fadeInUp" data-wow-offset="50">
		<img src="img/instruments/post_instr_610_0.jpg" width="100%" alt="">
		<br>
		<h3>неВредные советы</h3>
		<p>&nbsp;</p>
		<p style="padding: 0 10px">Выбор бумаги, инструмента<br>
		Делюсь своим инвентарем и отвечаю на вопросы. Да и про планирование тоже есть что сказать</p>
		<p>&nbsp;</p>
		<div class="dash"></div>
        <a class="more-link" href="<?=$pagelink?>tutorial3">Подробнее</a>
    </div>
<!-- postbox -->
<!-- postbox -->
    <div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	</div>
 <!-- postbox -->
    <div class="cut wow fadeInUp" data-wow-offset="50">
		<!-- <img src="img/instruments/post_instr_610_0.jpg" width="100%" alt=""> --><h2>COVID-19 не пройдет!<h2>
		<br>
		<h3>Готовим раствор антисептика</h3>
		<p>&nbsp;</p>
		<p style="padding: 0 10px">Строго по рекомендации ВОЗ<br>
		Делаем антисептик в домашних условиях за минимальные деньги</p>
		<p>&nbsp;</p>
		<div class="dash"></div>
        <a class="more-link" href="<?=$pagelink?>tutorial4">Подробнее</a>
    </div>
<!-- postbox -->
<!-- postbox -->
    <div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	</div>
 <!-- postbox -->
    <div class="cut wow fadeInUp" data-wow-offset="50">
		<!-- <img src="img/instruments/post_instr_610_0.jpg" width="100%" alt=""> --><h2>Советы по работе с Corel Draw<h2>
		<br>
		<h3>Советы от моделиста со стажем</h3>
		<p>&nbsp;</p>
		<p style="padding: 0 10px">
		Несколько моментов, которые облегчат работу. Новичкам полезно особенно. </p>
		<p>&nbsp;</p>
		<div class="dash"></div>
        <a class="more-link" href="<?=$pagelink?>tutorial5">Подробнее</a>
    </div>
<!-- postbox -->
</div>
  <!-- base -->