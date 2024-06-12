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
			<!--<h4><img src="img/spoler_eve.jpg">
			<span class="mark">+</span>Фото инструкции по сборке (спойлер)</h4>--><!--собсна, триггер-->
			<div class="spoiler-content hide"><!--блок со скрывающимся содержимым-->
					
				<div style="padding-left:10px; border-top-width: 1px;
							border-top-color: grey;
							border-top-style: dashed;">
							<p>&nbsp;</p>
					<!--
					<a href=" ?=$adress?>/karkas1_1.png" rel="zoom">
					<img src=" ?=$adress?>/karkas1_1_t.png" ?=$alting?> border="0" style="margin:5px"></a>
					-->
				</div>
			</div>
		</div>