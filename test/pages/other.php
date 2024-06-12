<?php
if(!$CORE)
{
header("Location: /test.index.php");
exit;
}
	

$dir = $_SESSION['dir'];
$subdir = $_SESSION['subdir'];
$alting = 'alt="'.$title. '" title="'.$title.'"';
$adress = $_SESSION['adress'].$dir.'/'.$subdir;


?>
<!-- base -->
  <div class="base">
	<div class="dash">
		<strong><h3>каталог моделей других разработчиков</h3></strong>
	</div>
    <div class="cut" style="padding:10px">
		<p>Файлы с моделями <strong>не моего производства</strong>, полученные из открытых источников.<br>После того, как бесплатный хостинг "приказал долго жить", часть файлов каталога была потеряна.<br>Часть моделей доступна с моего ЯндексДиска. Надеюсь, что смогу найти и восстановить все, добавить новые<br> Если Вы обладаете информацией о сайтах похожей тематики с моделями, доступными для свободного скачивания, сообщите мне и они навсегда пропишутся в этом каталоге.</p>
	</div>
<!-- -->
<?php
   include'models/some/zavtravoyna.txt';
   include'models/some/starwars.txt';
   include'models/some/eveonline.txt';
   include'models/some/doom.txt';
   include'models/some/fallout3.txt';
   include'models/some/stalker.txt';
   include'models/some/masseffect.txt';
   include'models/some/warhammer.txt';
   include'models/some/finalfantasy.txt';
   include'models/some/wow.txt';
   include'models/some/la2.txt';
   include'models/some/halflife2.txt';
   include'models/some/mechwarrior.txt';
   include'models/some/walle.txt';
   include'models/some/toystory.txt';
   include'models/some/other.txt';
?>
<!-- -->
    </div>
 <!-- base -->
