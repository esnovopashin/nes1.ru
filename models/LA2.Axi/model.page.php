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
				<img src="<?=$adress?>/title1.jpg" <?=$alting?> width="150px" border="0"></a>
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="padding-left:10px">
					<a href="models/LA2.Axi/AXI_w.jpg" rel="zoom"><img src="models/LA2.Axi/AXI_w.jpg" height="80px" <?=$alting?> border="0" style="margin-bottom:5px;"></a>&nbsp; 
					<img src="models/LA2.Axi/AXI_instr_037.jpg" <?=$alting?> border="0" style="margin-bottom:5px;">&nbsp; 
					<img src="models/LA2.Axi/AXI_instr_038.jpg" <?=$alting?> border="0" style="margin-bottom:5px;">&nbsp; 
					<a href="models/LA2.Axi/84535970_w.jpg" rel="zoom"><img src="models/LA2.Axi/DSC00016_1.jpg" <?=$alting?> border="0" style="margin-bottom:5px;"></a>&nbsp; 
					<a href="models/LA2.Axi/84539485_w.jpg" rel="zoom"><img src="models/LA2.Axi/DSC00016_3.jpg" <?=$alting?> border="0" style="margin-bottom:5px;"></a>&nbsp; 
					<a href="models/LA2.Axi/84573708_w.jpg" rel="zoom"><img src="models/LA2.Axi/DSC00016_2.jpg" <?=$alting?> border="0" style="margin-bottom:5px;"></a>&nbsp;
					<a href="models/LA2.Axi/84530161_w.jpg" rel="zoom"><img src="models/LA2.Axi/Yaxa_7.jpg" <?=$alting?> border="0" style="margin-bottom:5px;"></a>&nbsp;
					<a href="models/LA2.Axi/P5100605_r_800_w.jpg" rel="zoom"><img src="models/LA2.Axi/P5100605_r_200.jpg" height="80px" <?=$alting?> border="0" style="margin-bottom:5px;"></a>&nbsp;
					<a href="models/LA2.Axi/P5100606_r_800_w.jpg" rel="zoom"><img src="models/LA2.Axi/P5100606_r_200.jpg" height="80px" <?=$alting?> border="0" style="margin-bottom:5px;"></a>&nbsp;
				</div>
	
				<div><!--блок со спойлером-->
					
					<div><!--блок со скрывающимся содержимым-->

					</div>
				</div>
<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
					<strong>Название:</strong> AXI<br>
					<strong>Формат А4:</strong> 4листа + инструкции<br>
					<strong>Деталей:</strong> 147<br>
					<strong>H. Высота:</strong> 20 cm<br>
					<strong>W. Ширина:</strong> 15 cm<br>
					<strong>D. Толщина:</strong> 14 cm<br>
					<strong>Сложность:</strong> высокая<br>&nbsp;<br>
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<a href=https://yadi.sk/d/w6gzsG1IDzDcZ>Cкачать</a><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->