<?php
if(!$CORE)
{
header("Location: /index.php");
exit;
}

$dir = $_SESSION['dir'];
//$title = $_SESSION['title'];
//echo '<title>'.$title.'</title>';

?>
<!-- base -->
	<div class="base">
		<div class="cut contentbox">
			ой...!
			<br>&nbsp;<br>
			В данны момент, интересующую Вас модель можно только заказать.<br>
			Сам факт того, что она есть в галерее, говорит о том, что ее производство не закончено, или не "отшлифовано".<br>
			Свяжитесь со мной по эл. почте (см.самый низ страницы), указав название модели и наши координаты для связи.
			<br>&nbsp;<br>
			<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
			<div class="yashare-auto-init" data-yashareL10n="ru" 
				data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" 
				data-yashareTheme="counter">
			</div>
		</div>
	</div>
<!-- base -->