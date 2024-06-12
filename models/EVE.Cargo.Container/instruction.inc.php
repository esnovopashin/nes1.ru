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
				
				<div class="g-content dash contentbox"><!--блок со спойлером-->
					<h4><!--<img src="https://nes1.ru/images/spoler_eve.jpg">-->
					<span class="mark">+</span>Фото инструкции по сборке (спойлер)</h4><!--собсна, триггер-->
					<div class="spoiler-content hide"><!--блок со скрывающимся содержимым-->
				<div style="padding-left:10px; border-top-width: 1px;
							border-top-color: grey;
							border-top-style: dashed;">
					<a href="<?=$adress?>/cargo2_1.jpg" rel="zoom">
					<img src="<?=$adress?>/cargo2_1.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/cargo3_1.jpg" rel="zoom">
					<img src="<?=$adress?>/cargo3_1.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/cargo6_1.jpg" rel="zoom">
					<img src="<?=$adress?>/cargo6_1.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/cargo7_1.jpg" rel="zoom">
					<img src="<?=$adress?>/cargo7_1.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/cargo8_1.jpg" rel="zoom">
					<img src="<?=$adress?>/cargo8_1.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
					
					<a href="<?=$adress?>/cargo9_1.jpg" rel="zoom">
					<img src="<?=$adress?>/cargo9_1.jpg" <?=$alting?> width="150px" border="0" style="margin:5px"></a>
					
					
				</div>
				
			</div>
		</div>