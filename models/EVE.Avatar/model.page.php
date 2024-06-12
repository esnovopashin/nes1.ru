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
				<a href="<?=$adress?>/Avatar.jpg" rel="zoom">
				<img src="<?=$adress?>/Avatar.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="padding-left:10px; min-height:80px">
					<!--<a href="<=$adress?>/bp_ibis_old_iso_800_w1.jpg" rel="zoom">
					<img src="<=$adress?>/blueprint_ibis.old_200.jpg" <=$alting?> width="100px" border="0" style="margin:5px"></a> -->
				</div>
				
<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
				  <strong>Название:</strong> Бумажная модель корабля Avatar =EVE online=<br>
                  <strong>Формат А4:</strong> -- <br>
                  <strong>Деталей:</strong> -- <br>
                  <strong>H. Высота:</strong> -- <br>
                  <strong>D. Длина:</strong> -- <br>
                  <strong>W. Ширина:</strong> -- <br>
                  <strong>Сложность:</strong>от 12 лет<br>&nbsp;<br>
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<!-- <a href=https://yadi.sk/d/HatPMW2dgqRSM>Cкачать</a> --><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->