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
$alting = 'alt="'.$title. '"';
//echo '<title>'.$title.'</title>';

?>
<!-- base -->
	<div class="base">
		
		<div class="cut contentbox row">
			
			<div class="modelcard-img">
				<a href="<?=$adress?>/img/gallente-vexor-600.jpg" rel="zoom">
				<img src="<?=$adress?>/img/gallente-vexor-200.jpg" <?=$alting?> width="150px" border="0"></a>
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<!-- <div class="dash contentbox"  style="padding-left:10px">
					&nbsp;
				<a href="<=$adress>/0_w.jpg" rel="zoom">
				<img src="<=$adress>/0_r.jpg" <=$alting> width="150px" border="0" style="margin:5px"></a>
				</div> -->
				
<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash  contentbox" style="padding-left:10px">
					<p>
					<strong>Название:</strong> Gallente Vexor<br>
					<strong>Формат А4:</strong> ... <br>
					<strong>Деталей:</strong> ...<br>
					<strong>H. Высота:</strong> ...<br>
					<strong>D. Длина:</strong> ...<br>
					<strong>W. Ширина:</strong> ...<br>
					<strong>Сложность:</strong> ...<br>
					Модель на стадии разработки... все еще...
					&nbsp;<br>
					</p>
                    
				</div>
				<!-- <div class="dash  contentbox" style="padding-left:10px">
					<a href="https://nes1.ru/models/LA2.Giran.Castle/Giran.Castle.zip" title="<=$title?>">Cкачать (.zip 42 Mb)</a><br>&nbsp;<br>
				</div>-->
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->