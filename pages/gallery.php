<?php
if(!$CORE)
{
header("Location: /index.php");
exit;
}
	
$adress = $_SESSION['adress'];
$dir = $_SESSION['dir'];
//$title = $_SESSION['title'];
//echo '<title>'.$title.'</title>';

?>
<!-- base -->
<div class="base">
<!-- Идея и код получены из уроков https://www.w3schools.com/css/css3_flexbox.asp Очень рекомендую !! -->
<!-- Photo Grid -->
	<div class="dash">
		<strong><h3>галерея</h3></strong>
	</div>
<div class="row"> 
	<div class="column">
		<div class="imgbox">
			<img src="img/avapolbanki.jpg" style="width:100%">
			<div class="imgtext">Pol Banki</div>
		</div>

		<div class="imgbox"><img src="models/LA2.Nimi/88323985_w.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=nimi">Nimizida</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Nimi/nimi_s.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=nimi">Nimizida с хозяйкой</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Axi/title1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=axi">AXI</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Rudolf/img/P1050849_0rr.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=rudolf">Rudolf</a></div>
		</div>
		<div class="imgbox"><img src="models/EVE.Caldari.Merlin/merlin.beta_0.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=merlin">Caldari Merlin</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Dom.1/domik_photo_550.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=dommdt">Домик</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Cat/title.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=lacat">КОТ</a></div>
		</div>
		<div class="imgbox"><img src="models/EVE.Caldari.Heavy.Missle/chm_600_w.jpg" style="width:100%">
			<div class="imgtext"><a href="#">Caldari Heavy Missle II</a></div>
		</div>
		<div class="imgbox"><img src="models/Fallout3.Pups/Luck_beta_r.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=falloutpups">20 пупсов Fallout3</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Dom.2/dvorik.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=domik">Макет "Дворик"</a></div>
		</div>
		<div class="imgbox"><img src="models/EVE.Caldari.Raven/index.preview_raven.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=raven">Caldari Raven</a></div>
		</div>
		<div class="imgbox"><img src="models/TL.Orcish.Wand/orcish_wand_title_1.jpg" style="width:100%">
			<div class="imgtext"><br><a href="index.php?page=zakaz">Torchlight II. Orcish Wand</a></div>
		</div>
	</div>
	<div class="column">
		<div class="imgbox"><img src="models/LA2.Kukla/title2_200.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=doll">Кукла</a></div>
		</div>
		<div class="imgbox"><img src="models/EVE.Cargo.Container/P4231240_r.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=evecontainer">Контейнер для подарка</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Giran.Castle/giran_castle_550.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=castlegir">Giran. Замок</a></div>
		</div>
		<div class="imgbox"><img src="models/EVE.Armageddon/bp_armageddon_iso_550.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">Amarr Armageddon</a></div>
		</div>
		<div class="imgbox"><img src="img/basalt-battlehammer-01.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">Basalt Battlehammer</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Ded/title1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=laded">Боевой гном</a></div>
		</div>
		<div class="imgbox"><img src="models/PW.Cat.Trader/cat_title_200.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=pwcat">PW Кот-торговец</a></div>
		</div>
		<div class="imgbox"><img src="models/TL.Cyclop/Cyclop_head_title1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=cyclophead">Трофей "Голова Циклопа"</a></div>
		</div>
		<div class="imgbox"><img src="models/D3.Topor.i.Pen/d3topor_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=d3topor">Disciples3 Миниатюра "Пень и топор"</a></div>
		</div>
		<div class="imgbox"><img src="models/D3.Stone.Sword/StoneSword_title_1_200.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">Disciples3 Миниатюра "Каменныйй меч"</a></div>
		</div>
		<div class="imgbox"><img src="models/EVE.Caldari.Ibis/blueprint_ibis_550.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=ibis">Caldari Ibis</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Crystal.Sword/CrystalSword.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=sirasblade">LA2 Crystal Sword</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Full.Plate.Shield/FullPlateShield_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=fps">LA2. Full Plate Shield</a></div>
		</div>
	</div>  
	<div class="column">
		<div class="imgbox"><img src="models/TL.Vampire.Axe/VampireAxe_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">Torchlight II. Vampire Axe</a></div>
		</div>
		<div class="imgbox"><img src="models/EVE.Caldari.Kestrel/bp_kestrel_iso_550.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=kestrel">Caldari Kestrel</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Vyvern/Vyvern_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">LA2. Выверна</a></div>
		</div>
		<div class="imgbox"><img src="models/LA.Basilisk/Basilisk_title_1_200.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">LA2. Basilisk</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Fittered.Soul/FitteredSoul_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">LA2. Fittered Soul</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Doom.Shield/DoomShield_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=doomshield">LA2. Doom Shield</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Dragon.Slayer/ds_title1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=dragonslayer">LA2. Dragon Slayer</a></div>
		</div>
		<div class="imgbox"><img src="models/TL.Fiery.Polished.Shiv/FieryPolishedShiv_title1.jpg" style="width:100%"><div class="imgtext"><a href="index.php?page=fpshiv">Torchlight II. Fiery Polished Shiv</a></div>
		</div>
		<div class="imgbox"><img src="models/TL.Flanged.Shield.Of.The.Enduring/FlangedShieldOfTheEnduring_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">Torchlight II. Flanged Shield Of The Enduring</a></div>
		</div>
		<div class="imgbox"><img src="models/TL.Freezing.Pike.Gun/FreezingPikeGun_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">Torchlight II. Freezing Pike Gun</a></div>
		</div>
		<div class="imgbox"><img src="models/TL.Piercing.Ribauldeguin.Of.The.Bear/PiercingRibauldeguinOfTheBear_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">Torchlight II. Piercing Ribauldeguin Of The Bear</a></div></div>
		<div class="imgbox"><img src="models/TL.Braced.Bulwark.Shield/BracedBulwarkShield_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=bbs">Torchlight II. Braced Bulwark Shield</a></div>
		</div>

		</div>
	<div class="column">
		<div class="imgbox"><img src="models/LA2.Angel.Slayer/AngelSlayer_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=angelslayer">LA2. Angel Slayer</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Unicorn/uni_0.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=uni">RB Unicorn</a></div>
		</div>
		<div class="imgbox"><img src="models/TL.Ashen.Wand/Ashen_wand_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=ashenwand">Torchlight II. Ashen Wand</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Berserker.Blade/BerserkerBlade_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">LA2. Berserker Blade</a></div>
		</div>
		<div class="imgbox"><img src="models/TL.Beryl.Iron.Eclipse/BerylIronEclipse_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=bie">Torchlight II. Beryl Iron Eclipse</a></div>
		</div>
		<div class="imgbox"><img src="models/TL.Goblin.Axe/GoblinAxe_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">Torchlight II. Goblin Axe</a></div>
		</div>
		<div class="imgbox"><img src="models/TL.Goblin.Bardsword.Of.The.Savage/GoblinBardswordOfTheSavage_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">Torchlight II. Goblin Bardsword Of The Savage</a></p>
		</div>
		</div>
		<div class="imgbox"><img src="models/LA2.Imperial.Crusade.Shield/ImperialCrusaderShield_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=ics">LA2. Imperial Crusader Shield</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Samurai.Long.Sword/katana_title2.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=samurailongsword">LA2. Katana</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Kite.Shield/KiteShield_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=angelslayer">LA2. Angel Slayer</a></div>
		</div>
		<div class="imgbox"><img src="models/TL.Morning.Star/morningStar1_title1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=zakaz">Torchlight II. Morning Star</a></div>
		</div>
		<div class="imgbox"><img src="models/LA2.Sarnga/Sarnga_title_1.jpg" style="width:100%">
			<div class="imgtext"><a href="index.php?page=sarnga">LA2. Sarnga</a></div>
		</div>
	</div>
</div>
</div>
 <!-- base -->
