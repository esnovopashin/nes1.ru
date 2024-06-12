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
				<a href="<?=$adress?>/DOM.jpg" rel="zoom">
				<img src="<?=$adress?>/DOM_r.jpg" <?=$alting?> width="150px" border="0"></a>
			</div>
			
			<div class="modelcard">
				<div class="dash"  style="padding-left:4px">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="padding-left:10px">
					
					<a href="<?=$adress?>/0_w.jpg" rel="zoom">
					<img src="<?=$adress?>/0.jpg" width="100px"  <?=$alting?> border="0" style="margin:5px;"></a>&nbsp;
					<a href="<?=$adress?>/85676541_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85676541.jpg" width="100px"  <?=$alting?> border="0" style="margin:5px;"></a>&nbsp;
					<a href="<?=$adress?>/85676618_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85676618.jpg" width="100px"  <?=$alting?> border="0" style="margin:5px;"></a>&nbsp;
					<a href="<?=$adress?>/85676534_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85676534.jpg" width="100px"  <?=$alting?> border="0" style="margin:5px;"></a>&nbsp;
					<a href="<?=$adress?>/85676610_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85676610.jpg" width="100px"  <?=$alting?> border="0" style="margin:5px;"></a>&nbsp;
					<a href="<?=$adress?>/85670125_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85670125.jpg" width="100px"  <?=$alting?> border="0" style="margin:5px;"></a>&nbsp;
					<a href="<?=$adress?>/85670119_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85670119.jpg" width="100px"  <?=$alting?> border="0" style="margin:5px;"></a>&nbsp;
					<a href="<?=$adress?>/85670121_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85670121.jpg" width="100px"  <?=$alting?> border="0" style="margin:5px;"></a>&nbsp;
					<a href="<?=$adress?>/85670117_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85670117.jpg" width="100px"  <?=$alting?> border="0" style="margin:5px;"></a>&nbsp;
					<a href="<?=$adress?>/85670124_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85670124.jpg" width="100px"  <?=$alting?> border="0" style="margin:5px;"></a>&nbsp;
					
				</div>
	<!--блок со скрывающимся содержимым-->
<?php
   include("$dir/$subdir/instruction.inc.php");
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
					<strong>Название:</strong> Бумажная модель - Дом на МРТ<br>
                  <strong>Формат А3:</strong> 3 листа <br>
                  <strong>Деталей:</strong> 40<br>
                  <strong>H. Высота:</strong> 10 cm<br>
                  <strong>W. Ширина:</strong> 14 cm<br>
                  <strong>D. Толщина:</strong> 15.5 cm<br>
                  <strong>Сложность:</strong> от 10 лет<br>&nbsp;<br>
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<a href=https://yadi.sk/d/3qlsGertDfzGZ>Скачать</a><br>&nbsp;
				</div>

				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->