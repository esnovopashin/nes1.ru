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
				<a href="<?=$adress?>/Giran_castle_w.jpg" rel="zoom">
				<img src="<?=$adress?>/Giran_castle.jpg" <?=$alting?> width="150px" border="0"></a>
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="padding-left:10px">
					&nbsp;
				<a href="<?=$adress?>/0_w.jpg" rel="zoom">
				<img src="<?=$adress?>/0_r.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
				<a href="<?=$adress?>/83733967_w.jpg" rel="zoom">
				<img src="<?=$adress?>/83733967_r.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
				<a href="<?=$adress?>/83693843_w.jpg" rel="zoom">
				<img src="<?=$adress?>/83693843_r.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
				<a href="<?=$adress?>/83851747_w.jpg" rel="zoom">
				<img src="<?=$adress?>/83851747_r.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
				<a href="<?=$adress?>/83851762_w.jpg" rel="zoom">
				<img src="<?=$adress?>/83851762_r.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
				<a href="<?=$adress?>/83851794_w.jpg" rel="zoom">
				<img src="<?=$adress?>/83851794_r.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
				<a href="<?=$adress?>/83851801_w.jpg" rel="zoom">
				<img src="<?=$adress?>/83851801_r.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
				<a href="<?=$adress?>/83851803_w.jpg" rel="zoom">
				<img src="<?=$adress?>/83851803_r.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
				</div>
				
<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash  contentbox" style="padding-left:10px">
					<p>
					<strong>Название:</strong> Giran Замок<br>
					<strong>Формат А4:</strong> 24 листа <br>
					<strong>Деталей:</strong> 355<br>
					<strong>H. Высота:</strong> 15 cm<br>
					<strong>D. Длина:</strong> 55.7 cm<br>
					<strong>W. Ширина:</strong> 36.9 cm<br>
					<strong>Сложность:</strong>требуются навыки работы с бумагой<br>
					Архив с моделью содержит файл .pdo для облегчения процесса сборки.
					&nbsp;<br>
					</p>
                    
				</div>
				<div class="dash  contentbox" style="padding-left:10px">
					<a href="https://nes1.ru/models/LA2.Giran.Castle/Giran.Castle.zip" title="<?=$title?>">Cкачать (.zip 42 Mb)</a><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->