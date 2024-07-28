<?php
if(!$CORE)
{
header("Location: /index.php");
exit;
}
	
$adress = $_SESSION['adress'];
$dir = $_SESSION['dir'];
/*$title = $_SESSION['title'];
echo '<title>'.$title.'</title>';*/

?>
<!-- base -->
<div class="base">
	<div class="dash">
		<strong><h3>модели в проекте</h3></strong>
	</div>
	<div class="row">
		<div class="column">
<!-- column1 -->
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Armageddon/bp_armageddon_iso_550.jpg" style="width:100%" alt="Бумажная модель: Armageddon /EVEonline">
		    <!--<img src="images/level2_act.gif" alt="level2">-->
				<div class="imgtext">
					<a href="index.php?page=armageddon" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Armageddon /EVEonline</font></a>
				</div>
			</div>
		
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Abaddon/blueprint_abaddon_0.jpg" style="width:100%" alt="Бумажная модель: Abaddon /EVE online">
		    <!--<img src="images/level3_act.gif" alt="level3">-->
				<div class="imgtext">
					<a href="index.php?page=abaddon" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Abaddon /EVE online</font></a>
				</div>
			</div>

			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Caldari.Drake/bp_Drake_iso_550_w.jpg" style="width:100%" alt="Бумажная модель: Drake /EVE online">
		    <!--<img src="images/level1_act.gif" alt="level1">-->
				<div class="imgtext">
					<a href="index.php?page=drake" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Drake /EVE online</font></a>
				</div>
			</div>
		
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Caldari.Caracal/blueprint_Caracal_3_550_w.jpg" style="width:100%" alt="Бумажная модель: Caracal /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=caracal" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Caracal /EVE online</font></a>
				</div>
			</div>
		
			<div class="imgbox">
				<img src="<?=$adress?>/models/TL.Sunduk/Torchlight_Sunduk_w.jpg" style="width:100%" alt="Бумажная модель: Sunduk /Torchlight">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=sunduk" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Sunduk /Torchlight</font></a>
				</div>
			</div>
		
		
		</div>
<!-- column1 -->
<!-- column2 -->
		<div class="column">
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Megathron/blueprint_megathron_0.jpg" style="width:100%" alt="Бумажная модель: Megathron /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=megathron" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Megathron /EVE online</font></a>
				</div>
			</div>
		
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Caldari.Osprey/bp_osprey_800.png" style="width:100%" alt="Бумажная модель: Osprey /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=osprey" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Osprey /EVE online</font></a>
				</div>
			</div>
		
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Rifter/blueprint_rifter_0.jpg" style="width:100%" alt="Бумажная модель: Rifter /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=rifter" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Rifter /EVE online</font></a>
				</div>
			</div>
		
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Caldari.Ibis.New/blueprint_ibis.new4_550_w.jpg" style="width:100%" alt="Бумажная модель: Ibis (new) /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=ibis_new" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Ibis (new) /EVE online</font></a>
				</div>
			</div>
		
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Caldari.Condor/blueprint_condor_0.jpg" style="width:100%" alt="Бумажная модель: Condor /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=condor" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Condor /EVE online</font></a>
				</div>
			</div>
		
		</div>
<!-- column2 -->
<!-- column3 -->
		<div class="column">
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Absolution/blueprint_Absolution_0.jpg" style="width:100%" alt="Бумажная модель: Absolution /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=absolution" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Absolution /EVE online</font></a>
				</div>
			</div>

			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Anathema/Anathema.jpg" style="width:100%" alt="Бумажная модель: Anathema /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=anathema" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Anathema /EVE online</font></a>
				</div>
			</div>

			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Arbitrator/Arbitrator.jpg" style="width:100%" alt="Бумажная модель: Arbitrator /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=arbitrator" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Arbitrator /EVE online</font></a>
				</div>
			</div>

			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Augor/Augor.jpg" style="width:100%" alt="Бумажная модель: Augor /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=augor" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Augor /EVE online</font></a>
				</div>
			</div>
		
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Caldari.Cormorant/blueprint_cormorant_0.jpg" style="width:100%" alt="Бумажная модель: Cormorant /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=cormorant" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Cormorant /EVE online</font></a>
				</div>
			</div>
		
		</div>
<!-- column3 -->
<!-- column4 -->
		<div class="column">
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Avatar/Avatar.jpg" style="width:100%" alt="Бумажная модель: Avatar /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
				<a href="index.php?page=avatar" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Avatar /EVE online</font></a>
				</div>
			</div>

			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Tayra/EVE_Taira_3_550_w.jpg" style="width:100%" alt="Бумажная модель: Tayra /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
				<a href="index.php?page=tayra" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Tayra /EVE online</font></a>
				</div>
			</div>

			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Caldari.Bantam/Bantam.jpg" style="width:100%" alt="Бумажная модель: Bantam /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
				<a href="index.php?page=bantam" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Bantam /EVE online</font></a>
				</div>
			</div>

			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Caldari.Shuttle/caldari.shuttle.jpg" style="width:100%" alt="Бумажная модель: Caldari Shuttle /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=shuttle" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Caldari Shuttle /EVE online</font></a>
				</div>
			</div>
		
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Scorpion/Scorpion.jpg" style="width:100%" alt="Бумажная модель: Scorpion /EVEonline">
		    <!--<img src="images/level5_act.gif" alt="level5">-->
				<div class="imgtext">
					<a href="index.php?page=scorpion" target="_blank" rel= "noopener noreferrer"><font size="2">Бумажная модель: Scorpion /EVE online</font></a>
				</div>
			</div>
		
		</div>
<!-- column4 -->

    </div>
</div>
 <!-- base -->