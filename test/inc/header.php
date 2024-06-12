 <?php
// Проверяем "маркер", и если его нет, то выкидываем в index	
if(!$CORE)
{
header("Location: /index.php");
exit;
}

/* Установка локали и даты */
setlocale(LC_ALL, "russian");
$day = strftime('%d'); 
$mon = strftime('%B');
$mon = iconv('windows-1251', 'utf-8', $mon); // преобразовать из 1251 в UTF-8 (если код html в UTF-8) / переприсвоить переменной $mon значение в utf-8
$year = strftime('%Y');

/* Приветствие */
$hour = (int) strftime('%H'); // (int) - приводит строку в целое число
$welcome = '';

if ($hour > 0 && $hour < 6) {
$welcome = 'Доброй ночи';
}
elseif ($hour >= 6 && $hour < 12) {
    $welcome = 'Доброе утро';
}
elseif ($hour >= 12 && $hour < 18) {
    $welcome = 'Добрый день';
}
elseif ($hour >= 18 && $hour < 23) {
    $welcome = 'Добрый вечер';
}
else {
    $welcome = 'Доброй ночи';
}

?>




  <title><?=$title;?></title>
  <META http-equiv="content-type" content="text/html; charset=utf-8" />
  <META name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!--<link rel="icon" href="https://nes1.ru/img/favicon.ico" type="image/x-icon" />-->
  <link rel="icon" href="https://nes1.ru/img/favicon.svg" type="image/svg+xml" />
  <META name="DESCRIPTION" content="<?=$description;?>" />
  <META name="keywords" content="<?=$keywords;?>" />
  <meta name="author" content="Евгений Новопашин" />
  <meta name="copyright" content="&copy; 1996 - <?=$year;?> NES papercraft" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat&#124;Open+Sans&#124;Raleway&#124;Roboto&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" />
  <link rel="stylesheet" href="1024/style.css" />
  <link rel="stylesheet" href="1024/style_news.css" />
  <link rel="stylesheet" href="1024/w3.slidebar.css" />
  <link rel="stylesheet" href="1024/animate.css" />
  <meta name="yandex-verification" content="2cb4f8f41296b4da" />
<!-- <style>
#topBtn {
  display: none;
  position: fixed;
  bottom: 70px;
  right: 20px;
  z-index: 99;
  font-family: FontAwesome;
  font-size: 20px;
  border: none;
  outline: none;
  background-color: lightgrey;
  color: white;
  cursor: pointer;
  padding: 5px;
  border-radius: 4px;
}

#topBtn:hover {
  background-color: #555;
}

.hidden{
     opacity:0;
}
.visible{
     opacity:1;
}
</style> -->
</head>
<body>


<div class="container">
    <div class="header">
        <header>
<!-- Navigation -->
			<nav class="header">
				<a class="logo" href="index.php">
				<img src="img/nespapercraft_logo100.jpg" width="100" height="40" alt="at Home"></a>
					<ul id="menu">
						<li><a href="<?=$pagelink?>about" style="padding: 15px 0 0 0;">О проекте</a></li>
					</ul>
			</nav>
			<div>
				<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none" id="mySidebar">
					<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">&times;</button>

					<div class="dash lcolbox ahov" style="font-size: 18px"><strong>
						<a href="index.php">главная</a></strong>
					</div>
					<div class="dash lcolbox ahov" style="font-size: 18px"><strong>
						<a href="<?=$pagelink?>projekt">в проекте</a></strong>
					</div>
					<div class="dash lcolbox ahov" style="font-size: 18px"><strong>
						<a href="<?=$pagelink?>inwork">в работе</a></strong>
					</div>
					<div class="dash lcolbox ahov" style="font-size: 18px"><strong>
						<a href="<?=$pagelink?>complete">готово</a></strong>
					</div>
					<div class="dash lcolbox ahov" style="font-size: 18px"><strong>
						<a href="<?=$pagelink?>gallery">галерея</a></strong>
					</div>
					<div class="dash lcolbox ahov" style="font-size: 18px"><strong>
						<a href="<?=$pagelink?>other">другое</a></strong>
					</div>
					<div id="tut" class="dash lcolbox ahov" style="font-size: 18px"><strong>
						<a href="<?=$pagelink?>tutorials">уроки</a></strong>
					</div>
					<div id="tut" class="dash lcolbox ahov" style="font-size: 18px"><strong>
						<a href="<?=$pagelink?>about">о проекте</a></strong>
					</div>
				</div>

				<div class="button">
					<button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
				</div>
				

				<style>
				.ya-page_js_yes .ya-site-form_inited_no { display: none; }
				</style>
				<script>
					(function(w,d,c){
						var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;
						if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';
						}
						s.type='text/javascript';
						s.async=true;s.charset='utf-8';
						s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);
						(w[c]||(w[c]=[])).push(function(){
							Ya.Site.Form.init()
						})
					})
					(window,document,'yandex_site_callbacks');
				</script>
<!-- код формы поиска -->
				<form action="https://yandex.ru/search/site/" method="get" id="searchform">
					<input type="hidden" name="searchid" value="2387492"/>
					<input type="hidden" name="l10n" value="ru"/>
					<input type="hidden" name="reqenc" value=""/>
					<input type="search" name="text" value="" placeholder="поиск"/>
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
<!-- Navigation -->
		</header>
    </div>
  <!-- Central container -->
	<div class="total col-12 row">