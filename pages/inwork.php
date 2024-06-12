<?php
if(!$CORE)
{
header("Location: /index.php");/*if (!isset($_SESSION['title']))*/
exit;
}
	
$adress = $_SESSION['adress'];
$dir = $_SESSION['dir'];
//$title = $_SESSION['title'];
$alting = 'alt="'.$title. '" title="'.$title.'"';
//echo '<title>'.$title.'</title>';

?>
<!-- base -->
<div class="base">
	<div class="dash">
		<strong><h3>модели в разработке</h3></strong>
	</div>
	<div class="row">
				<div class="column">
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Gallente.Vexor/img/gallente-vexor-600.jpg" style="width:100%" alt="Бумажная модель: Armageddon /EVE online"><br>
				<img src="<?=$adress?>/img/level3_act.gif" alt="level3">
				<div class="imgtext">
					<a href="index.php?page=vexor" target="_blank" rel= "noopener noreferrer">
					<font size="2">Бумажная модель: Vexor /EVE online</font></a>
				</div>
			</div>
		</div>
		
	
		<div class="column">
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Armageddon/bp_armageddon_iso_550.jpg" style="width:100%" alt="Бумажная модель: Armageddon /EVE online"><br>
				<img src="<?=$adress?>/img/level2_act.gif" alt="level2">
				<div class="imgtext">
					<a href="index.php?page=armageddon" target="_blank" rel= "noopener noreferrer">
					<font size="2">Бумажная модель: Armageddon /EVE online</font></a>
				</div>
			</div>
		</div>
		<!-- <div class="column">
			<div class="imgbox">
				<img src="<=$adress?>models/EVE.Caldari.Kestrel/bp_kestrel_iso_550.jpg" style="width:100%" alt="Бумажная модель: Kestrel /EVE online"><br>
				<img src="<=$adress?>img/level3_act.gif" alt="level3">
				<div class="imgtext">
					<a href="index.php?page=kestrel" target="_blank" rel= "noopener noreferrer">
					<font size="2">Бумажная модель: Kestrel /EVE online</font></a>
				</div>
			</div>
		</div> -->
		<!-- <div class="column">
			<div class="imgbox">
				<img src="<=$adress?>models/EVE.Caldari.Raven/bp_raven_iso_s_200.jpg" style="width:100%" alt="Бумажная модель: Raven /EVE online"><br>
				<img src="<=$adress?>img/level3_act.gif" alt="level3">
				<div class="imgtext">
					<a href="index.php?page=raven" target="_blank" rel= "noopener noreferrer">
					<font size="2">Бумажная модель: Raven /EVE online</font></a>
				</div>
			</div>
		</div> -->
		<div class="column">
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Caldari.Drake/bp_Drake_iso_200.jpg" style="width:100%" alt="Бумажная модель: Drake /EVE online"><br>
				<img src="<?=$adress?>/img/level1_act.gif" alt="level1">
				<div class="imgtext">
					<a href="index.php?page=drake" target="_blank" rel= "noopener noreferrer">
					<font size="2">Бумажная модель: Drake /EVE online</font></a>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="imgbox">
				<img src="<?=$adress?>/models/EVE.Caldari.Ibis/bp_ibis_old_iso_200_t.jpg" style="width:100%" alt="Бумажная модель: IBIS /EVE online"><br>
				<img src="<?=$adress?>/img/level5_act.gif" alt="level5">
				<div class="imgtext">
				<a href="index.php?page=ibis" target="_blank" rel= "noopener noreferrer">
					<font size="2">Бумажная модель: IBIS /EVE online</font></a>
				</div>
			</div>
		</div>
    </div>
</div>
 <!-- base -->