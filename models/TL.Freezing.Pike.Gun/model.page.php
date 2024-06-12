<?php
if(!$CORE)
{
header("Location: /index.php");
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
				<a href="<?=$adress?>/FreezingPikeGun_title_1_800.jpg" rel="zoom">
				<img src="<?=$adress?>/FreezingPikeGun_title_1_200.jpg" <?=$alting?> width="150px" border="0"></a>
			</div>
			
			<div class="modelcard">
				<div class="dash"  style="padding-left:4px">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash"  style="padding-left:10px">
					&nbsp;
					<!--
					<a href=" ?=$adress?>/ds_title.jpg" rel="zoom">
					<img src=" ?=$adress?>/ds_title_s.jpg" ?=$alting?> width="150px" border="0"></a>
					-->
				</div>
	
<?php
	include("$dir/$subdir/instruction.inc.php");
	include("$dir/$subdir/info.inc.php");
?>
				<div class="dash" style="padding-left:10px">
					<strong>Название:</strong> Freezing Pike Gun <br>
                  <strong>Формат А4:</strong> -- <br>
                  <strong>Деталей:</strong> -- <br>
                  <strong>H. Высота:</strong> -- <br>
                  <strong>D. Длина:</strong> -- <br>
                  <strong>W. Ширина:</strong> -- <br>
                  <strong>Сложность:</strong> от 9 лет<br>&nbsp;<br>
				</div>
				<div class="dash" style="padding-left:10px">
					<!-- <a href=https://yadi.sk/d/_Ldy2U2_ENQ8G>Cкачать</a> --><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->