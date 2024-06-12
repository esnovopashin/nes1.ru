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
				<a href="<?=$adress?>/title1.jpg" rel="zoom">
				<img src="<?=$adress?>/title1_r.jpg" <?=$alting?> width="150px" border="0"></a>
			</div>
			
			<div class="modelcard">
				<div class="dash"  style="padding-left:4px">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash"  style="padding-left:10px">
					&nbsp;
					
					<a href=" <?=$adress?>/DSC00082_800.jpg" rel="zoom">
					<img src=" <?=$adress?>/DSC00082_150.jpg" <?=$alting?> width="150px" border="0" style="margin:5px;"></a>
					<a href=" <?=$adress?>/DSC00083_800.jpg" rel="zoom">
					<img src=" <?=$adress?>/DSC00083_150.jpg" <?=$alting?> width="150px" border="0" style="margin:5px;"></a>
					
				</div>
	
<?php
	include("$dir/$subdir/instruction.inc.php");
	include("$dir/$subdir/info.inc.php");
?>
				<div class="dash" style="padding-left:10px">
					<strong>Название:</strong>Трофей: Голова Циклопа<br>
                  <strong>Формат А4:</strong> 2 листа <br>
                  <strong>Деталей:</strong> 16<br>
                  <strong>H. Высота:</strong> 150 mm<br>
                  <strong>D. Длина:</strong> 77 mm<br>
                  <strong>W. Ширина:</strong> 111 mm<br>
                  <strong>Сложность:</strong>от 9 лет&nbsp;<br>
				</div>
				<div class="dash" style="padding-left:10px">
					<a href=https://yadi.sk/d/8b_Fcnh5EHa6B>Cкачать</a><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->