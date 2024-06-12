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
				<a href="<?=$adress?>/title1.jpg" rel="zoom">
				<img src="<?=$adress?>/title1_r.jpg" <?=$alting?> width="150px" border="0"></a>
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="padding-left:10px">
					
					<!-- фото сборки, или инструкции 
					<a href="models/LA2.Axi/AXI.jpg" rel="zoom"><img src="models/LA2.Axi/AXI.jpg" height="80px"  border="0" style="margin-bottom:5px;"></a>&nbsp;
					-->
					
				</div>
	
<div><!--блок со спойлером-->
<?php
   //include("$dir/$subdir/instruction.inc.php");
?>
<!--блок со скрывающимся содержимым-->
</div>

<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
					<strong>Название:</strong> Бумажная модель - Боевой Гном<br>
					<strong>Формат А3:</strong> 4 листа <br>
					<strong>Деталей:</strong> >77<br>
					<strong>H. Высота:</strong> 25 cm<br>
					<strong>W. Ширина:</strong> 18 cm<br>
					<strong>D. Толщина:</strong> 10 cm<br>
					<strong>Сложность:</strong> требуется опыт работы с бумагой<br>&nbsp;<br>
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<a href=https://yadi.sk/d/y6NrXgYTDzDFJ>Скачать</a><br>&nbsp;<br>
					<a href="<?=$adress?>/ded_instr.rar">Скачать инструкцию</a><br>&nbsp;
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>

	</div>
<!-- base -->