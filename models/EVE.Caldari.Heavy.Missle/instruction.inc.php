				<!-- скрипт спойлера -->
				<script type="text/javascript" src="1024/jquery-1.8.3.min.js"></script>
				<script type="text/javascript">
					$(document).ready(function(){
						$('.g-content h4').click(function(){ //ждем события click на триггере
							if($(this).parent().children('div.spoiler-content').hasClass('hide')){ //если у спойлера есть класс hide
								$(this).parent().children('div.spoiler-content').slideDown('slow'); //мееееедлееенноооо разворачиваем
								$(this).parent().children('div.spoiler-content').removeClass('hide'); //удалаям у спойлера класс hide
								$(this).children('span.mark').text('-'); //меняем текст в триггере
							}else{ //у спойлера нет класса hide
								$(this).parent().children('div.spoiler-content').slideUp('slow'); //мееееедлееенноооо сворачиваем
								$(this).parent().children('div.spoiler-content').addClass('hide'); //добавляем спойлеру класс hide
								$(this).children('span.mark').text('+'); //меняем текст в триггере
							}
						});
					});
				</script>
				<!-- скрипт спойлера -->
				
				<div class="g-content dash contentbox"><!--блок со спойлером-->
					<h4><!--<img src="img/spoler_eve.jpg">-->
					<span class="mark">+</span>Фото инструкции по сборке (спойлер)</h4><!--собсна, триггер-->
					<div class="spoiler-content hide"><!--блок со скрывающимся содержимым-->
<div lass="contentbox" style="padding-left:10px; border-top-width: 1px;
  border-top-color: grey;
  border-top-style: dashed;">
	<a href="<?=$adress?>/base_karkas_1.jpg" rel="zoom">
	<img src="<?=$adress?>/base_karkas_1_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/base_karkas_2.jpg" rel="zoom">
	<img src="<?=$adress?>/base_karkas_2_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/vertikal_support.jpg" rel="zoom">
	<img src="<?=$adress?>/vertikal_support_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/base.jpg" rel="zoom">
	<img src="<?=$adress?>/base_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/v_privod_karkas.jpg" rel="zoom">
	<img src="<?=$adress?>/v_privod_karkas_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/v_privod_1.jpg" rel="zoom">
	<img src="<?=$adress?>/v_privod_1_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/v_privod_2.jpg" rel="zoom">
	<img src="<?=$adress?>/v_privod_2_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/base_privod.jpg" rel="zoom">
	<img src="<?=$adress?>/base_privod_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/supports_karkas.jpg" rel="zoom">
	<img src="<?=$adress?>/supports_karkas_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/central_karkas.jpg" rel="zoom">
	<img src="<?=$adress?>/central_karkas_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/launcher_karkas.jpg" rel="zoom">
	<img src="<?=$adress?>/launcher_karkas_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/launcher_karkas1.jpg" rel="zoom">
	<img src="<?=$adress?>/launcher_karkas1_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/launcher_karkas3.jpg" rel="zoom">
	<img src="<?=$adress?>/launcher_karkas3_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/launcher_karkas4.jpg" rel="zoom">
	<img src="<?=$adress?>/launcher_karkas4_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/karkas_g1-h1.jpg" rel="zoom">
	<img src="<?=$adress?>/karkas_g1-h1_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/g3-h3.jpg" rel="zoom">
	<img src="<?=$adress?>/g3-h3_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/missle_box.jpg" rel="zoom">
	<img src="<?=$adress?>/missle_box_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/karkas_h4-g4.jpg" rel="zoom">
	<img src="<?=$adress?>/karkas_h4-g4_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/karkas_j3.jpg" rel="zoom">
	<img src="<?=$adress?>/karkas_j3_t_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/supports.jpg" rel="zoom">
	<img src="<?=$adress?>/supports_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/supports1.jpg" rel="zoom">
	<img src="<?=$adress?>/supports1_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/lokator_karkas.jpg" rel="zoom">
	<img src="<?=$adress?>/lokator_karkas_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/lokator_karkas1.jpg" rel="zoom">
	<img src="<?=$adress?>/lokator_karkas1_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/lokator.jpg" rel="zoom">
	<img src="<?=$adress?>/lokator_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/antenna0.jpg" rel="zoom">
	<img src="<?=$adress?>/antenna0_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/antenna1.jpg" rel="zoom">
	<img src="<?=$adress?>/antenna1_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/antenna2.jpg" rel="zoom">
	<img src="<?=$adress?>/antenna2_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/lokator_block.jpg" rel="zoom">
	<img src="<?=$adress?>/lokator_block_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/karkas_f10.jpg" rel="zoom">
	<img src="<?=$adress?>/karkas_f10_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/items.jpg" rel="zoom">
	<img src="<?=$adress?>/items_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

	<a href="<?=$adress?>/missles.jpg" rel="zoom">
	<img src="<?=$adress?>/missles_t.jpg" <?=$alting?> height="50" border="0" style="margin:5px"></a>

</div>
</div>
</div>