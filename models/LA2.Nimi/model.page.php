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
				<a href="<?=$adress?>/Nimizida_title.jpg" rel="zoom">
				<img src="<?=$adress?>/Nimizida_title_r.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
			</div>
			
			<div class="modelcard">
				<div class="dash"  style="padding-left:4px">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="padding-left:10px">
					
					<a href="<?=$adress?>/88388835_w.jpg" rel="zoom">
					<img src="<?=$adress?>/nimi.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a> 
					
					<a href="<?=$adress?>/88324007_w.jpg" rel="zoom">
					<img src="<?=$adress?>/88324007_s.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/88323876_w.jpg" rel="zoom">
					<img src="<?=$adress?>/88323876_s.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/88323985_w.jpg" rel="zoom">
					<img src="<?=$adress?>/88323985_s.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/88323920_w.jpg" rel="zoom">
					<img src="<?=$adress?>/88323920_s.jpg" <?=$alting?> width="100px" border="0" style="margin:5px"></a>
					
				</div>
				
<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
				  <p><strong>Название:</strong> Бумажная модель - NIMIZIDA<br>
                     <strong>Формат А4:</strong> 4 листа +инструкции +<a href="<?=$adress?>/podstavka.pdf" title="скачать">подставка</a> <br>
                     <strong>Деталей:</strong> >130<br>
                     <strong>H. Высота:</strong> 25 cm<br>
                     <strong>W. Ширина:</strong> 13,5 cm<br>
                     <strong>D. Толщина:</strong> 17,7 cm<br>
                     <strong>Сложность:</strong> требуется опыт<br>&nbsp;<br>
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