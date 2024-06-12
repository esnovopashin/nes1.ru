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
				
				<div class="g-content dash"><!--блок со спойлером-->
				
					<h4><!--<img src="img/spoler_eve.jpg">-->
					<span class="mark">+</span>Фото инструкции по сборке (спойлер)</h4><!--собсна, триггер-->
					<div class="spoiler-content hide"><!--блок со скрывающимся содержимым-->
					
<div class="contentbox" style="padding-left:10px; border-top-width: 1px;
  border-top-color: grey;
  border-top-style: dashed;">
					<a href="<?=$adress?>/karkas1_1.png" rel="zoom">
					<img src="<?=$adress?>/karkas1_1_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_1.png" rel="zoom">
					<img src="<?=$adress?>/instr_1_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_2.png" rel="zoom">
					<img src="<?=$adress?>/instr_2_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_3.png" rel="zoom">
					<img src="<?=$adress?>/instr_3_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_4.png" rel="zoom">
					<img src="<?=$adress?>/instr_4_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_5.png" rel="zoom">
					<img src="<?=$adress?>/instr_5_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/karkas2.png" rel="zoom">
					<img src="<?=$adress?>/karkas2_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_6.png" rel="zoom">
					<img src="<?=$adress?>/instr_6_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_6_1.png" rel="zoom">
					<img src="<?=$adress?>/instr_6_1_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_7.png" rel="zoom">
					<img src="<?=$adress?>/instr_7_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/karkas7.png" rel="zoom">
					<img src="<?=$adress?>/karkas7.png" height="50px" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_8.png" rel="zoom">
					<img src="<?=$adress?>/instr_8_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_10.png" rel="zoom">
					<img src="<?=$adress?>/instr_10_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_9.png" rel="zoom">
					<img src="<?=$adress?>/instr_9_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_17.png" rel="zoom">
					<img src="<?=$adress?>/instr_17_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/karkas3.png" rel="zoom">
					<img src="<?=$adress?>/karkas3_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_13.png" rel="zoom">
					<img src="<?=$adress?>/instr_13.png" height="50px" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/karkas4.png" rel="zoom">
					<img src="<?=$adress?>/karkas4.png" height="50px" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_11.png" rel="zoom">
					<img src="<?=$adress?>/instr_11_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_12.png" rel="zoom">
					<img src="<?=$adress?>/instr_12_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/karkas5.png" rel="zoom">
					<img src="<?=$adress?>/karkas5.png" height="50px" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_14.png" rel="zoom">
					<img src="<?=$adress?>/instr_14_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_16.png" rel="zoom">
					<img src="<?=$adress?>/instr_16_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/karkas6.png" rel="zoom">
					<img src="<?=$adress?>/karkas6.png" height="50px" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_18.png" rel="zoom">
					<img src="<?=$adress?>/instr_18_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_19.jpg" rel="zoom">
					<img src="<?=$adress?>/instr_19_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_20.png" rel="zoom">
					<img src="<?=$adress?>/instr_20_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/merlin_a4.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin_a4_t.jpg" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/merlin_e20-21.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin_e20-21_t.jpg" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_19_1.jpg" rel="zoom">
					<img src="<?=$adress?>/instr_19_1_t.jpg" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/merlin_a6-a6.1.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin_a6-a6.1_t.jpg" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/merlin_f5.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin_f5_t.jpg" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/merlin_a7.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin_a7_t.jpg" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/merlin_F6.jpg" rel="zoom">
					<img src="<?=$adress?>/merlin_F6_t.jpg" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_21.png" rel="zoom">
					<img src="<?=$adress?>/instr_21_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_22.png" rel="zoom">
					<img src="<?=$adress?>/instr_22_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_23.png" rel="zoom">
					<img src="<?=$adress?>/instr_23_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_24.png" rel="zoom">
					<img src="<?=$adress?>/instr_24_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_25.png" rel="zoom">
					<img src="<?=$adress?>/instr_25_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_26.png" rel="zoom">
					<img src="<?=$adress?>/instr_26_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_27.png" rel="zoom">
					<img src="<?=$adress?>/instr_27_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_28.jpg" rel="zoom">
					<img src="<?=$adress?>/instr_28_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_29.jpg" rel="zoom">
					<img src="<?=$adress?>/instr_29_t.png" <?=$alting?> border="0" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_30.jpg" rel="zoom">
					<img src="<?=$adress?>/instr_30.jpg" <?=$alting?> border="0"  width="50px" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_31.jpg" rel="zoom">
					<img src="<?=$adress?>/instr_31.jpg" <?=$alting?> border="0"  width="50px" style="margin:5px"></a>
					<a href="<?=$adress?>/instr_32.jpg" rel="zoom">
					<img src="<?=$adress?>/instr_32_t.jpg" <?=$alting?> border="0" style="margin:5px"></a>
				</div>
			</div>
		</div>