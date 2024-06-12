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
				<a href="<?=$adress?>/dvorik.jpg" rel="zoom">
				<img src="<?=$adress?>/dvorik.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash  contentbox"  style="padding-left:10px">
					
					<a href="<?=$adress?>/domik.jpg" rel="zoom">
					<img src="<?=$adress?>/domik_resize.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a> 
					
					<a href="<?=$adress?>/87416775_w.jpg" rel="zoom">
					<img src="<?=$adress?>/87416775.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/87416774_w.jpg" rel="zoom">
					<img src="<?=$adress?>/87416774.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/87416783_w.jpg" rel="zoom">
					<img src="<?=$adress?>/87416783.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
					
				</div>
				
<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash  contentbox" style="padding-left:10px">
				  <p>
				  <strong>Название:</strong> Бумажная модель - Дворик<br>
                  <strong>Формат А4:</strong> 5 листов + инструкции <br>
                  <strong>Деталей:</strong> 236<br>
                  <strong>H. Высота:</strong> 10 cm<br>
                  <strong>W. Ширина:</strong> 32.4 cm<br>
                  <strong>D. Толщина:</strong> 32.3 cm<br>
                  <strong>Сложность:</strong> от 10 лет<br>&nbsp;<br>
				  </p>
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<a href="https://yadi.sk/d/U9mTwoBHDzA5V">Скачать</a><br>&nbsp;<br>
				</div>

				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->