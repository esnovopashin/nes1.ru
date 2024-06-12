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
				<a href="<?=$adress?>/title.jpg" rel="zoom">
				<img src="<?=$adress?>/title_r.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash"  style="padding-left:10px">
					&nbsp;
					<!-- <a href="-adres-/img/P1050849_0rr.jpg" rel="zoom">
					<img src="-$adress-/img/P1050849_0rr_s.jpg" -$alting- width="100px" border="0" style="margin:5px"></a> -->
				</div>
				
<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
					<p>
					<strong>Название:</strong> R.B. Киса<br>
					<strong>Формат А4:</strong> 1 лист <br>
					<strong>Деталей:</strong> 44<br>
					<strong>H. Высота:</strong> 100 mm<br>
					<strong>D. Длина:</strong> 37 mm<br>
					<strong>W. Ширина:</strong> 46 mm<br>
					<strong>Сложность:</strong>от 9 лет
					&nbsp;<br>
					Если будете аккуратны, получится ЗАМЕЧАТЕЛЬНАЯ фигурка !<br>
					&nbsp;<br>
					</p>
                    
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<a href=https://yadi.sk/d/U-1lv95rEJH4d>Cкачать</a><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->