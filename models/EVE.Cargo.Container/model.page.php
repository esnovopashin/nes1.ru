<?php
if(!$CORE)
{
header("Location: /test1.index.php");/*if (!isset($_SESSION['title']))*/
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
				<a href="<?=$adress?>/Cargo_Container.jpg" rel="zoom">
				<img src="<?=$adress?>/Cargo_Container_200.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="padding-left:10px">
					<a href="<?=$adress?>/P4231240_r.jpg" rel="zoom">
					<img src="<?=$adress?>/P4231240_r.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a> 
					<a href="<?=$adress?>/P4231241_r.jpg" rel="zoom">
					<img src="<?=$adress?>/P4231241_r.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a> 
				</div>
				

<?php
   include("$dir/$subdir/instruction.inc.php");
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
				  <strong>Название:</strong> Бумажная модель Cargo container<br>
                  <strong>Формат А4:</strong> 8 листов <br>
                  <strong>Деталей:</strong> 29<br>
                  <strong>H. Высота:</strong> 198 mm<br>
                  <strong>D. Длина:</strong> 108 mm<br>
                  <strong>W. Ширина:</strong> 108 mm<br>
                  <strong>Сложность:</strong> от 10 лет<br>&nbsp;<br>
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<a href=https://yadi.sk/i/6-WnoSYyg9sCX>Cкачать</a><br>&nbsp;<br>
				</div>

				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->