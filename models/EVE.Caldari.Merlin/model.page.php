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
				<a href="<?=$adress?>/merlin_blueprint1_R_w.jpg" rel="zoom">
				<img src="<?=$adress?>/merlin_blueprint1_R_w.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
				<a href="https://gamemodels3d.com/games/eveonline/vehicles/33659">3D модель<br>
				<img src="img/gm_white.png" width="150px" title="смотреть 3D модель"></a><br>
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="padding-left:10px">
					<a href="<?=$adress?>/merlin.beta_0_w.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin.beta_0_w.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a> 
					<a href="<?=$adress?>/merlin.beta_1_w.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin.beta_1_w.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a> 
					<a href="<?=$adress?>/merlin.beta_2_w.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin.beta_2_w.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a> 
					<a href="<?=$adress?>/merlin.beta_3_w.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin.beta_3_w.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a> 
					<a href="<?=$adress?>/merlin.beta_4_w.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin.beta_4_w.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a> 
					<a href="<?=$adress?>/merlin.beta_5_w.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin.beta_5_w.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a> 
					<a href="<?=$adress?>/merlin.beta_6_w.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin.beta_6_w.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
				</div>
				
<?php
   include("$dir/$subdir/instruction.inc.php");
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
					<strong>Название:</strong> фрегат Merlin в раскраске Nugoeihuuvi Edition<br>
					<strong>Формат А4:</strong> 12 листов <br>
					<strong>Деталей:</strong> 278<br>
					<strong>H. Высота:</strong> 250 mm<br>
					<strong>D. Длина:</strong> 444 mm<br>
					<strong>W. Ширина:</strong> 320 mm<br>
					<strong>Сложность:</strong>от 12 лет<br>
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<a href="https://yadi.sk/d/39ZfXW0pg6vfh">Cкачать</a><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->