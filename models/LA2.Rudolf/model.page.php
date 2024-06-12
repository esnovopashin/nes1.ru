<?php
if(!$CORE)
{
header("Location: /index.php");/*if (!isset($_SESSION['title']))*/
exit;
}
	
$adress = $_SESSION['adress'];
$dir = $_SESSION['dir'];
$subdir = $_SESSION['subdir'];
//$title = $_SESSION['title'];
$adress = $adress.'/'.$dir.'/'.$subdir;
$alting = 'alt="'.$title. '" title="'.$title.'"';
//echo '<title>'.$title.'</title>';

?>
<!-- base -->
	<div class="base">
		
		<div class="cut contentbox row">
			
			<div class="modelcard-img">
				<a href="<?=$adress?>/rudolf_title.jpg" rel="zoom">
				<img src="<?=$adress?>/rudolf_title_s.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
			</div>

			<div class="modelcard">
				<div class="dash"  style="padding-left:4px">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash"  style="padding-left:10px">
					&nbsp;
				</div>
				<div class="dash contentbox"  style="padding-left:10px">
					<a href="<?=$adress?>/img/P1050849_0rr_w.jpg" rel="zoom">
					<img src="<?=$adress?>/img/P1050849_0rr_s.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/img/P1050846_0rr_w.jpg" rel="zoom">
					<img src="<?=$adress?>/img/P1050846_0rr_s.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/img/P1050847_0rr_w.jpg" rel="zoom">
					<img src="<?=$adress?>/img/P1050847_0rr_s.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
				</div>
				
<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
				  <p><strong>Название:</strong> Олень Rudolf<br>
                     <strong>Формат А4:</strong> 2 листа <br>
                     <strong>Деталей:</strong> <br>
                     <strong>H. Высота:</strong> 150 mm<br>
                     <strong>D. Длина:</strong> 114 mm<br>
                     <strong>W. Ширина:</strong> 101 mm<br>
                     <strong>Сложность:</strong>от 12 лет<br>&nbsp;<br>Если будете аккуратны, получится ЗАМЕЧАТЕЛЬНАЯ фигурка !<br>&nbsp;<br>
					 P.S. На снимке: бета-тест. На финальной модели пунктирных линий сгиба нет.</p>
                     <br>
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<a href=https://yadi.sk/d/KkIjUgUdDfti7>Cкачать</a><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->