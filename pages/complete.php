<?php
if(!$CORE)
{
header("Location: /index.php");/*if (!isset($_SESSION['title']))*/
exit;
}
	
$pagelink = $_SESSION['pagelink'];

?>
<!-- Спойлеры от Bill Vates -->
<script src="1024/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.g-content h4').click(function(){ //ждем события click на триггере
				if($(this).parent().children('div.spoiler-content').hasClass('hide')){ //если у спойлера есть класс hide
					$(this).parent().children('div.spoiler-content').slideDown('slow'); //мееееедлееенноооо разворачиваем
					$(this).parent().children('div.spoiler-content').removeClass('hide'); //удалаям у спойлера класс hide
					$(this).children('span.mark').text('-'); //меняем текст в триггере
				}
				else{ //у спойлера нет класса hide
					$(this).parent().children('div.spoiler-content').slideUp('slow'); //мееееедлееенноооо сворачиваем
					$(this).parent().children('div.spoiler-content').addClass('hide'); //добавляем спойлеру класс hide
					$(this).children('span.mark').text('::'); //меняем текст в триггере
				}
			});
		});
	</script>
<!-- Спойлеры от Bill Vates -->

<!-- base -->
	<div class="base">

		<div class="dash">
			<strong><h3>готовые модели</h3></strong>
		</div>
		<div class="cut contentbox">
			<div class="g-content" style="margin-bottom:10px;"><!--блок со спойлером--><h4><img src="img/spoler_eve.jpg">
				<span class="mark">::</span>EVEonline: корабли и предметы</h4><!--собсна, триггер-->
				<div class="spoiler-content cut hide"><!--сблок со скрывающимся содержимым-->
			<?php
			   include'models/incl_eve.txt';
			?>
				</div>
			</div>


			<div class="g-content" style="margin-bottom:10px;"><!--блок со спойлером--><h4><img src="img/spoler_fol3.jpg">
				<span class="mark">::</span>Fallout3: Оружие и предметы</h4><!--собсна, триггер-->
				<div class="spoiler-content cut hide"><!--сблок со скрывающимся содержимым-->

			<?php 
			   include'models/incl_fal3.txt';
			?>
				</div>
			</div>
		

			<div class="g-content" style="margin-bottom:10px;"><!--блок со спойлером--><h4><img src="img/spoler_la2.jpg">
				<span class="mark">::</span>Lineage2: фигурки и строения</h4><!--собсна, триггер-->
				<div class="spoiler-content cut hide"><!--сблок со скрывающимся содержимым-->

			<?php 
			   include'models/incl_la1.txt';
			?>
				</div>
			</div>
		
		
			<div class="g-content" style="margin-bottom:10px;"><!--блок со спойлером--><h4><img src="img/spoler_la2.jpg">
				<span class="mark">::</span>Lineage2: Оружие и щиты</h4><!--собсна, триггер-->
				<div class="spoiler-content cut hide"><!--сблок со скрывающимся содержимым-->

			<?php 
			   include'models/incl_la2.txt';
			?>
				</div>
			</div>
		

			<div class="g-content" style="margin-bottom:10px;"><!--блок со спойлером--><h4><img src="img/spoler_pw.jpg">
				<span class="mark">::</span>Perfect World</h4><!--собсна, триггер-->
				<div class="spoiler-content cut hide"><!--сблок со скрывающимся содержимым-->

			<?php
			   include'models/incl_pw.txt';
			?>
				</div>
			</div>
		
		
			<div class="g-content" style="margin-bottom:10px;"><!--блок со спойлером--><h4><img src="img/spoler_tl.jpg">
				<span class="mark">::</span>Torchlight: Оружие и предметы</h4><!--собсна, триггер-->
				<div class="spoiler-content cut hide"><!--сблок со скрывающимся содержимым-->

			<?php
			   include'models/incl_tl.txt';
			?>
				</div>
			</div>
		
		
			<div class="g-content" style="margin-bottom:10px;"><!--блок со спойлером--><h4><img src="img/spoler_dspls.jpg">
				<span class="mark">::</span>Disciples3: Строения и предметы</h4><!--собсна, триггер-->
				<div class="spoiler-content hide"><!--сблок со скрывающимся содержимым-->

			<?php
			   include'models/incl_dspls.txt';
			?>
				</div>
			</div>
	

		</div>

</div>
 <!-- base -->