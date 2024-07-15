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
	<div class="base">
		
		<div class="cut contentbox row">
			
			<div class="modelcard-img">
				<a href="<?=$adress?>/img.jpg" <?=$alting?> rel="zoom">
				<img src="<?=$adress?>/img_s.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="min-height:80px">
<?php
function displayImages() {
    $currentDirectory = dirname(__FILE__);
    $rootPath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $currentDirectory);
    $url = 'https://' . $_SERVER['HTTP_HOST'] . $rootPath;

    // Получаем все файлы с расширениями .jpg и .png
    $images = glob($currentDirectory . '/*.{jpg,png}', GLOB_BRACE);

    // Проверяем, есть ли изображения
    if (!empty($images)) {
        // Выводим каждое изображение в div
        foreach ($images as $image) {
            echo '<div style="display: inline-block; margin-right: 10px; width: 100px;">';
			echo '<a href="'. $url . '/' . basename($image) . '" rel="zoom">';
            echo '<img src="'. $url . '/' . basename($image) . '" alt="Image" style="width: 100%;"></a>';
            echo '</div>';
        }
    } 
}

// Вызываем функцию
displayImages();

?>
					<!--<a href="<=$adress?>/bp_ibis_old_iso_800_w1.jpg" rel="zoom">
					<img src="<=$adress?>/blueprint_ibis.old_200.jpg" <=$alting?> width="100px" border="0" style="margin:5px"></a> -->
				</div>
				
<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" >
				  <strong>Название:</strong> <?=$title?><!--Бумажная модель корабля Armageddon =EVE online=--><br>
                  <strong>Формат А4:</strong> -- <br>
                  <strong>Деталей:</strong> -- <br>
                  <strong>H. Высота:</strong> -- <br>
                  <strong>D. Длина:</strong> -- <br>
                  <strong>W. Ширина:</strong> -- <br>
                  <strong>Сложность:</strong>&nbsp;от 12 лет<br>&nbsp;<br>
				</div>
				<div class="dash contentbox">
					<!-- <a href=https://yadi.sk/d/HatPMW2dgqRSM>Cкачать</a> --><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->