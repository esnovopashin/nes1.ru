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
				<a href="<?=$adress?>/cat_title.jpg" rel="zoom">
				<img src="<?=$adress?>/cat_title_s.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
			</div>
			
			<div class="modelcard">
				<div class="dash"  style="padding-left:4px">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash"  style="padding-left:10px">
					&nbsp;
				</div>
				
<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash" style="padding-left:10px">
				  <p><strong>Название:</strong> Котик-трейдер<br>
                  <strong>Формат А4:</strong> 2листa + инструкции<br>
                  <strong>Деталей:</strong> 12<br>
                  <strong>H. Высота:</strong> 25 cm<br>
                  <strong>W. Ширина:</strong> 12.3 cm<br>
                  <strong>D. Толщина:</strong> 8.1 cm<br>
                  <strong>Сложность:</strong>от 9 лет<br>&nbsp;<br>
				  </p>
				</div>
				<div class="dash" style="padding-left:10px">
					<a href=https://yadi.sk/d/K6Epv7ScDgrR9>Cкачать</a><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->