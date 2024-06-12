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
				<a href="<?=$adress?>/title.jpg" rel="zoom">
				<img src="<?=$adress?>/title_r.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="padding-left:10px">
					<a href="<?=$adress?>/85481538_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85481538_1.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>&nbsp;
					<a href="<?=$adress?>/85481565_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85481565_1.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>&nbsp;
					<a href="<?=$adress?>/85481540_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85481540_1.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>&nbsp;
					<a href="<?=$adress?>/85481541_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85481541_1.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>&nbsp;
					<a href="<?=$adress?>/85481543_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85481543_1.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>&nbsp;
					<a href="<?=$adress?>/85481575_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85481575_1.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>&nbsp;
					<a href="<?=$adress?>/85481546_w.jpg" rel="zoom">
					<img src="<?=$adress?>/85481546_1.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>&nbsp;
				</div>
				
				
<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
				  <p>LineAge 2 - Boss: mr.Cat. Бумажная модель</p>
                     <p><strong>Название:</strong> mr. CAT<br>
                     <strong>Формат А4:</strong> 5листов + 5 листов инструкции<br>
                     <strong>Деталей:</strong> 52<br>
                     <strong>H. Высота:</strong> 20 cm<br>
                     <strong>W. Ширина:</strong> 12,2 cm<br>
                     <strong>D. Толщина:</strong> 16,6 cm<br>
                     <strong>Сложность:</strong>от 9 лет<br>&nbsp;<br>
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<a href="https://yadi.sk/d/6L1yZjUnDzD9t">Cкачать</a><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->