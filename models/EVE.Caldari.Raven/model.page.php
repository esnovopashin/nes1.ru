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
				<a href="<?=$adress?>/title_Raven_800.jpg" rel="zoom">
				<img src="<?=$adress?>/title_Raven_150.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="padding-left:10px; min-height:80px">
					<a href="<?=$adress?>/bp_raven_iso_s1_w.jpg" rel="zoom">
					<img src="<?=$adress?>/bp_raven_iso_s_200.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
				</div>
				
<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
				  <strong>Название:</strong> Бумажная модель корабля Raven =EVE online=<br>
                  <strong>Формат А4:</strong> 9 <br>
                  <strong>Деталей:</strong> 199 <br>
                  <strong>H. Высота:</strong> 98 mm <br>
                  <strong>D. Длина:</strong> 300 mm <br>
                  <strong>W. Ширина:</strong> 298 <br>
                  <strong>Сложность:</strong>необходимы навыки работы с бумагой. Сложно для новичка<br>&nbsp;<br>
				  Архив содержит альбом с разверткой и pdo-инструкцию
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<a href="https://yadi.sk/d/eghg9d30aEoBfg">Cкачать</a><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->