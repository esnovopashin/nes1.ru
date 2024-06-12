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
				<a href="<?=$adress?>/chm_600_w.jpg" rel="zoom">
				<img src="<?=$adress?>/chm_200.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
			</div>
			
			<div class="modelcard">
				<div class="dash"  style="padding-left:4px">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="padding-left:10px"><!-- блок фото -->

					<a href="<?=$adress?>/P4030172_800_w.jpg" rel="zoom">
					<img src="<?=$adress?>/P4030172_1t.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a> 
					<a href="<?=$adress?>/P4030165_600_w.jpg" rel="zoom">
					<img src="<?=$adress?>/P4030165_1t.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/P4030160_600_w.jpg" rel="zoom">
					<img src="<?=$adress?>/P4030160_1t.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>					

					<a href="<?=$adress?>/P4030161_600_w.jpg" rel="zoom">
					<img src="<?=$adress?>/P4030161_1t.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/P4030162_600_w.jpg" rel="zoom">
					<img src="<?=$adress?>/P4030162_1t.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/P4030163_600_w.jpg" rel="zoom">
					<img src="<?=$adress?>/P4030163_1t.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/P4030164_600_w.jpg" rel="zoom">
					<img src="<?=$adress?>/P4030164_1t.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/bp_CaldariHeavyMissle_800_w.jpg" rel="zoom">
					<img src="<?=$adress?>/bp_CaldariHeavyMissle_150_t.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>

				</div><!-- блок фото -->

<?php
   include("$dir/$subdir/instruction.inc.php");
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
				  <p><strong>Название:</strong> Caldari Heavy Missle II =EVE online=<br>
                     <strong>Формат А4:</strong> 12 листов <br>
                     <strong>Деталей:</strong> 193<br>
                     <strong>H. Высота:</strong> 116 mm<br>
                     <strong>D. Длина:</strong> 187 mm<br>
                     <strong>W. Ширина:</strong> 174 mm<br>
                     <strong>Сложность:</strong>от 12 лет<br>&nbsp;<br>
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<a href=https://yadi.sk/d/xP3AnkbAsSPP6>Cкачать</a><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->