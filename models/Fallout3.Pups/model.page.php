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
				<a href="<?=$adress?>/all_PUPS_promo.jpg" rel="zoom">
				<img src="<?=$adress?>/all_PUPS_promo.jpg" <?=$alting?> width="150px" border="0"></a>
				<br>&nbsp;<br>&nbsp;
			</div>
			
			<div class="modelcard">
				<div class="dash">
					<strong><h3><?=$title?></h3></strong>
				</div>
				<div class="dash contentbox"  style="padding-left:10px"><!-- блок фото -->

					<a href="<?=$adress?>/title_Sneak2_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Sneak2_r_s.png" alt="Бумажная фигурка пупса Sneak =Fallout3=" title="Бумажная фигурка пупса Sneak =Fallout3=" width="100px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/title_Speech_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Speech_r_s.png" alt="Бумажная фигурка пупса Speech =Fallout3=" title="Бумажная фигурка пупса Speech =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_Unarmed_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Unarmed_r_s.png" alt="Бумажная фигурка пупса Unarmed =Fallout3=" title="Бумажная фигурка пупса Unarmed =Fallout3=" width="100px" border="0" style="margin:5px"></a>					

					<a href="<?=$adress?>/title_Medicine_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Medicine_r_s.png" alt="Бумажная фигурка пупса Medicine =Fallout3=" title="Бумажная фигурка пупса Medicine =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_Melee.Weapons_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Melee.Weapons_r_s.png" alt="Бумажная фигурка пупса Melee Weapons =Fallout3=" title="Бумажная фигурка пупса Melee Weapons =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_Repair_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Repair_r_s.png" alt="Бумажная фигурка пупса Repair =Fallout3=" title="Бумажная фигурка пупса Repair =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_Science_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Science_r_s.png" alt="Бумажная фигурка пупса Science =Fallout3=" title="Бумажная фигурка пупса Science =Fallout3=" width="100px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/title_Small.Guns_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Small.Guns_r_s.png" alt="Бумажная фигурка пупса Small Guns =Fallout3=" title="Бумажная фигурка пупса Small Guns =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_Barter_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Barter_r_s.png" alt="Бумажная фигурка пупса Barter =Fallout3=" title="Бумажная фигурка пупса Barter =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_Big.Guns_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Big.Guns_r_s.png" alt="Бумажная фигурка пупса Big Guns =Fallout3=" title="Бумажная фигурка пупса Big Guns =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_EnergyWeapon_r.png" rel="zoom">
					<img src="<?=$adress?>/title_EnergyWeapon_r_s.png" alt="Бумажная фигурка пупса Energy Weapon =Fallout3=" title="Бумажная фигурка пупса Energy Weapon =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_Explosives_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Explosives_r_s.png" alt="Бумажная фигурка пупса Explosives =Fallout3=" title="Бумажная фигурка пупса Explosives =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_Lockpick_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Lockpick_r_s.png" alt="Бумажная фигурка пупса Lockpick =Fallout3=" title="Бумажная фигурка пупса Lockpick =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_Strength_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Strength_r_s.png" alt="Бумажная фигурка пупса Strength =Fallout3=" title="Бумажная фигурка пупса Strength =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_Perception_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Perception_r_s.png" alt="Бумажная фигурка пупса Perception =Fallout3=" title="Бумажная фигурка пупса Perception =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_Endurance_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Endurance_r_s.png" alt="Бумажная фигурка пупса Endurance =Fallout3=" title="Бумажная фигурка пупса Endurance =Fallout3=" width="100px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/title_Charisma_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Charisma_r_s.png" alt="Бумажная фигурка пупса Charisma =Fallout3=" title="Бумажная фигурка пупса Charisma =Fallout3=" width="100px" border="0" style="margin:5px"></a>					

					<a href="<?=$adress?>/title_Intelligence_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Intelligence_r_s.png" alt="Бумажная фигурка пупса Intelligence =Fallout3=" title="Бумажная фигурка пупса Intelligence =Fallout3=" width="100px" border="0" style="margin:5px"></a>

					<a href="<?=$adress?>/title_Agility_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Agility_r_s.png" alt="Бумажная фигурка пупса Agility =Fallout3=" title="Бумажная фигурка пупса Agility =Fallout3=" width="100px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/title_Luck_r.png" rel="zoom">
					<img src="<?=$adress?>/title_Luck_r_s.png" alt="Бумажная фигурка пупса Luck =Fallout3=" title="Бумажная фигурка пупса Luck =Fallout3=" width="100px" border="0" style="margin:5px"></a>					
				</div><!-- блок фото -->

<?php
   include("$dir/$subdir/info.inc.php");
?>
				<div class="dash contentbox" style="padding-left:10px">
					<p>
					<strong>Название:</strong> Коллекционный набор фигурок пупсов из Fallout3<br>
                    <strong>Формат А4:</strong> 81 лист <br>
                    <strong>Деталей:</strong> ... <br>
                    <strong>H. Высота:</strong> 150 mm<br>
                    <strong>D. Длина:</strong> 60... 120 mm<br>
                    <strong>W. Ширина:</strong> 60... 120 mm<br>
                    <strong>Сложность:</strong>от 10 лет<br>
					<br>&nbsp;
                    
					</p>
				</div>
				<div class="dash contentbox" style="padding-left:10px">
					<a href="<?=$adress?>/All_Fallout_Bobbleheads.zip">Cкачать Альбомы</a><br>&nbsp;<br>
				</div>
				<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
			</div>
			
		</div>
	
	</div>
<!-- base -->