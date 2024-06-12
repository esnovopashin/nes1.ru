<?php
if(!$CORE)
{
header("Location: /index.php");
exit;
}
	
$adress = $_SESSION['adress'];
$dir = $_SESSION['dir'];
//$title = $_SESSION['title'];
$adress = $adress.$dir.'/';
$alting = 'alt="'.$title. '" title="'.$title.'"';
//echo '<title>'.$title.'</title>';

?>

<!-- base -->
  <div class="base" style="padding: 0 10px">
 <!-- postbox -->
    <div class="cut">
<!-- Доброго времени суток!
 Этот текст виден только Вам, желющему разместить его у себя на странице, выдав за свой.
 Если у Вас не хватает терпения или скилов для написания статей НА СОБСТВЕННОМ ОПЫТЕ, и Вы вынуждены брать труд других людей, будьте добры, любым удобным способом, сообщите об авторстве данного текста! (например, вставтье этот код в свою страницу: <p>Оригинал статьи по адресу: <a href="https://nes1.ru/index.php?page=tutorials"> перейти</a></p> ) -->

		<div class="wow fadeInUp" data-wow-offset="50">
		<h2>Kestrel</h2>
		<p>переработка и сборка
		<br>&nbsp;<br>
		Прошло некоторое время, и мы можем расширить наш первый тутор.<br>
		Теперь мы будем рассматривать процесс изготовления модели космической техники на основе фрегата Kestrel из EVEonline.<br>
		Blueprint: <a href="img/diz/Kestreel_up_1_1b.jpg" rel="zoom">1</a> / <a href="img/diz/kestrel_left_0b.jpg" rel="zoom">2</a> / <a href="img/diz/kestrel_right_0b.jpg" rel="zoom">3</a>
		<br>&nbsp;<br>
		<a href="img/diz/Kestrel_title.jpg" rel="zoom"><img src="img/diz/Kestrel_title_s.jpg" class="-img"  border="0" title=""></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Сейчас мы разберем несколько ньюансов, с которыми сталкивается каждый моделлер, при работе с ГОТОВЫМИ моделями из игр. Процесс самостоятельного изготовления деталей в этой статье рассматриваться не будет. Возможно, я его опишу как-нибудь позже.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Первое. Каждая модель - это ни что иное, как полая оболочка, лишенная какого-либо каркаса. Его нам придется делать самостоятельно<br>
		Часто, поверхности пересекаются без каких-либо разрезов, проникая внутрь друг друга посреди полигонов/плоскостей. 
		Что это: косяки разрабов или последствия рипа - не ясно, да и не столь важно. Мы будем оставлять только то, что нам нужно и править все, что окажется не сведенным.<br>
		Второе. необходимо помнить, что разворачивать модель будем в Pepakur`е, соответственно, чем меньше полигонов - тем легче будет в работе.<br>
		Третье. Pepakurа раскладывает поверхности так, что лист гнется только в одной плоскости. Помним об этом.<br>
		Четвертое. Модель, сразу после рипа, представляет собой небольшое количество объектов. Нам предстоит самостоятельно разделить ее на модули.<br>
		Пятое. Сохраненок много не бывает. Сохранять будем все этапы работы в отдельных файлах. Это позволит всегда вернуться на то место, когда еще ничего не испортил.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Итак, у нас есть сырая модель (если вы воспользовались первой частью <a title="первый урок" href="index.php?page=tutorial1" target="_blank" rel= "noopener noreferrer">этого тутора <i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a>). 
		<br>&nbsp;<br>
		<a href="img/diz/Kestrel_up.jpg" rel="zoom"><img src="img/diz/Kestrel_up_s.jpg" class="-img"  border="0" title=""></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Теперь, внимательно ее рассмотрев, понимаем, что нам необходимо разделить модель на более мелкие части. 
		Это нужно для более комфортной работы и при сборке модели в бумаге.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Первое, что мы сделаем, это - удалим весь мусор со сцены: Ctrl+A, в панели модификаторов выбираем Edit Poly, далее, 
		ставим выделение по <a href="img/diz/Vertex.jpg" alt="Vertex" title="Vertex" rel="zoom">Vertex</a>.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Очень часто, вся сцена содержит не только то, что нам нужно, но и пару-тройку десятков квадратных условных километров сторонних объектов, да усеяна точками, разбросанными вокруг модели. Ctrl+A, жмем Remove Isolated Vertices (вкладка Edit Vertices). Удалятся все вертексы, которые никак не связаны с нашей моделью.<br>
		Снова выделяем все точки. Удаляем все, что болтается за контурами модели. 
		Если таких точек и "мусора" вокруг нет, значит повезло, проблем становится меньше.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<i><b>*Совет</b> Выделите ВСЮ модель. Сконвертируйте ее в Editable Poly (в выпадающем меню по ПКМ), в панели модификаторов выберем выделение по вертексам, снова выделим все вертексы и нажмем Weld. 
		Количество выделенных вертексов заметно уменьшится. Вы избавились от кучи проблем и существенно ускорили работу. Сохраните результат.</i>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Соориентируем нашего "пациента" строго по осям проекции.
		<br>&nbsp;<br>
		<a href="img/diz/blueprint1.jpg" rel="zoom"><img src="img/diz/blueprint1_s.jpg" class="-img"  border="0" alt="blueprint" title="blueprint"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Теперь нам необходимо наметить фронт работ.<br>
		1. Определим, какие части станут отдельными, где пройдут границы деталей.<br>
		<a href="img/diz/Kestrel_up_razbor.jpg" rel="zoom"><img src="img/diz/Kestrel_up_razbor_s.jpg" class="-img"  border="0" alt="blueprint" title="blueprint"></a><br>
		<a href="img/diz/Kestrel_down_razbor.jpg" rel="zoom"><img src="img/diz/Kestrel_down_razbor_s.jpg" class="-img"  border="0" title=""></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		2. Ометим возможное расположение внутреннего каркаса. Нужно принимать во внимание геометрию модели и предстоящую ее сборку. Представим, как будем собирать и где нам необходима дополнительная жесткость деталей.
		<br>&nbsp;<br>
		<a href="img/diz/Kestrel_up_kapkac.jpg" rel="zoom"><img src="img/diz/Kestrel_up_kapkac_s.jpg" class="-img"  border="0" title="blueprint"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		3. С детализацией и упрощением определимся по месту.<br>
		Хотя, я предпочитаю знать о всех "косяках" риппленой модели сразу. 
		Для этого, можно крутить и рассматривать 3D модельку, оценивая, намечая объем работ и делая screenshoot каждого элемента, с которым надо работать. 
		Для этой работы необходимо достаточно много времени и подходит тому, у кого оно есть. 
		Второй вариант позволяет сразу увидеть, где и что не так - это закинуть исходную модель в Pepakur`у. 
		Вот тут-то все и станет видно. Делаем screenshoot с модели в Pepakur`е всех элементов, которые надо править и работаем с ними в 3D редакторе.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Поехали.<br>
		С помощью комбинаций Convert to Editable Poly-<a href="img/diz/Polygon.jpg" rel="zoom" alt="Polygon" title="Polygon">Polygon</a>-<a href="img/diz/Scroll_Buttons_Detach.jpg" rel="zoom" alt="Detach" title="Detach">Detach</a> разделяем наш корабль на элементы.<br>
		Начнем с кабины.<br>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part1.jpg" rel="zoom"><img src="img/diz/part1_s.jpg" class="-img"  border="0" alt="часть" title="часть" ></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Она плоская и заостренная к носу. Значит, потребуется лонжерон для придания жесткости и шпангоут на месте соединения со следующей деталью. Изготовим их, формируя из плоскости, преобразованной в Editable Poly и корректируемой путем выполнения <a href="img/diz/Scroll_Buttons_Cut.jpg" rel="zoom" alt="Cut" title="Cut">Cut</a>,  Move Vertex, <a href="img/diz/Scroll_Buttons_Target_Weld.jpg" rel="zoom" alt="Targed Weld" title="Targed Weld">Targed Weld</a> и <a href="img/diz/Scroll_Buttons_Collapse.jpg" rel="zoom" alt="Collaps" title="Collaps">Collaps</a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part1_1.jpg" rel="zoom"><img src="img/diz/part1_1_s.jpg" class="-img"  border="0" title=""></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		При работе с кабиной обнаруживаетя, что нужно отделить одну часть кабины,
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part0_1.jpg" rel="zoom"><img src="img/diz/part0_1_s.jpg" class="-img"  border="0" title=""></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		сделав ее самостоятельной деталью
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part0_3.jpg" rel="zoom"><img src="img/diz/part0_3_s.jpg" class="-img"  border="0" title=""></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Вместе с тем, необходимо сделать площадку, на которую эта деталь крепится
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part1_2.jpg" rel="zoom"><img src="img/diz/part1_2_s.jpg" class="-img"  border="0" title=""></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<i><b>*СОВЕТ</b>: необходимо взять за правило, что если мы что-то от чего-то отделяем, необходимо позаботиться о том, как и куда мы будем все, в последствии, приклеивать.</i>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Любую плоскость, добавляемую к нашей модели, необходимо прикрепить к детали, для которой она изготавливалась. 
		Вместе с тем, если 2 детали соединяются, значит, на этом месте нам нужны плоскости склейки на обеих деталях. <br>
		Есть небольшой ньюанс: плоскости склейки должны быть развернуты "лицом" друг к другу, чтобы, в дальнейшем, не оказалось в Pepakur`e, что закрашеная поверхность обращена внутрь детали...<br>
		Итак, изготовили плоскость, совместили все ее вершины с углами детали.<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Проведем <a href="img/diz/Scroll_Buttons_Attach.jpg" rel="zoom" alt="Attach" title="Attach">Attach</a>. 
		Видим, что наша плоскость приобрела текстуру детали. Нам это не нужно. 
		Открываем панель материалов, кидаем на нашу плоскость пустой шар - деталь приобрела серый цвет. 
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Теперь, нам необходимо "приварить" нашу заплатку к обшивке.<br>Выделим деталь, превращаем в Editable Poly, 
		выбираем <a href="img/diz/Vertex.jpg" rel="zoom" alt="Vertex" title="Vertex">Vertex</a>, выделяем вершины на углах соединения, 
		проводим <a href="img/diz/Scroll_Buttons_Collapse.jpg" rel="zoom" alt="Collaps" title="Collaps">Collaps</a>. 
		(Далее, эту процедуру мы будем называть "сваркой") Теперь наши части - единое целое и разворачиваться будут вместе.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Обнаруживается часть, которую необходимо упростить, т.к. в нашем масштабе эта деталь доставит только неудобства в работе. Изменим ее кривизну, сделав плоской площадкой.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part0_0.jpg" rel="zoom"><img src="img/diz/part0_0_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Результат работы с кабиной - 3 детали:<br>&nbsp;<br>
		<a href="img/diz/part0_2.jpg" rel="zoom"><img src="img/diz/part0_2_s.jpg" class="-img"  border="0" title=""></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		следующие детали достаточно просты. Тут все те же плоскости и сварка.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part3_1.jpg" rel="zoom"><img src="img/diz/part3_1_s.jpg" class="-img" border="0" title="деталь"></a>  <a href="img/diz/part3_2.jpg" rel="zoom"><img src="img/diz/part3_2_s.jpg" class="-img" border="0" title="деталь"></a> <a href="img/diz/part3_3.jpg" rel="zoom"><img src="img/diz/part3_3_s.jpg" class="-img" border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Следующая большая деталь
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/console.jpg" rel="zoom"><img src="img/diz/console_s.jpg" class="-img"  border="0" title="деталь"></a> 
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		будет содержать обшивку, с приваренными заплатками и внутренний каркас, который мы изготовим самостоятельно<br> 
		При изготовлении каркаса, помним, что детали нужно будет вставлять друг в друга. Сделаем разрезы от краев до общей середины деталей.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part6.jpg" rel="zoom"><img src="img/diz/part6_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Переходим к следующей детали, начинающейся сразу за кабиной, проходящей снизу гондолы и заканчивающейся под левым двигателем.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part4_2.jpg" rel="zoom"><img src="img/diz/part4_2_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		сделаем на ней плоскость, придающую жесткость и обеспечивающую место склейки с собранной гондолой
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part2.jpg" rel="zoom"><img src="img/diz/part2_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Отделим хвостовик, сделав его отдельной деталью, немного его упростив и приварив площадки на месте склейки.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part4.jpg" rel="zoom"><img src="img/diz/part4_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Обнаруживается косяк - не хватает точек для корректного перехода одной плоскости в другую
		<br>&nbsp;<br>
		<a href="img/diz/part4_1.jpg" rel="zoom"><img src="img/diz/part4_1_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		исправим, добавив с помощью <a href="img/diz/Scroll_Buttons_Cut.jpg" rel="zoom" alt="Cut" title="Cut" >Cut</a> недостающие точки
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Сталкиваемся еще с несколькими косяками<br>
		- пересечение поверхностей<br>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part4_3.jpg" rel="zoom"><img src="img/diz/part4_3_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		изнутри это выглядит так:
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part4_4.jpg" rel="zoom"><img src="img/diz/part4_4_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		необходимо, с помощью все того же <a href="img/diz/Scroll_Buttons_Cut.jpg" rel="zoom" alt="Cut" title="Cut" >Cut</a>, отрезать все лишнее.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		- не стыковка поверхностей (лучше исправить сразу, как только увидели). Свариваем.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/kosyak_1.jpg" rel="zoom"><img src="img/diz/kosyak_1_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		- лишняя поверхность за пределами места склейки. Режем.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part4_5.jpg" rel="zoom"><img src="img/diz/part4_5_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		- поверхности не соприкасаются, хотя, должны бы.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part4_6.jpg" rel="zoom"><img src="img/diz/part4_6_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Исправим это, подтянув одну из вершин нашей детали так, чтобы пересечение было ровным и постоянным
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		снова режем и удаляем все лишнее.<br>
		Все чаще и чаще, ощущаем себя хирургами. Эт нормально. Привыкайте.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		и как подтверждение, снова косяк:<br>
		- накладные ребра на гондоле входят в деталь насквозь.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part4_0.jpg" rel="zoom"><img src="img/diz/part4_0_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		эти обрубки нужно удалить. Насовсем
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Расслабляться рано, т.к. деталь наша  оказалась довольно капризной - снова пересечение плоскостей без разреза.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/inside.jpg" rel="zoom"><img src="img/diz/inside_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Тут проще - <a href="img/diz/Scroll_Buttons_Cut.jpg" rel="zoom" alt="Cut" title="Cut">Cut</a>, разделив полигон над углом плоскости (см.рис), затем <a href="img/diz/Scroll_Buttons_Target_Weld.jpg" rel="zoom" alt="Targed Weld" title="Targed Weld">Targed Weld</a> (слить точки в одну, на вершине) и делов-то.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		переходим к левому двигателю и почти к концу работы над левой гондолой.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part7.jpg" rel="zoom"><img src="img/diz/part7_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Закроем плоскостями все места стыковки с другими деталям, пользуясь добавленияем полигонов к плоскости 
		(выделите <a href="img/diz/Edge.jpg" rel="zoom" alt="Edge" title="Edge">грань</a>, зажмите Shift и перемещайте грань в сторону), двигая вершины и отрезая лишнее.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part8.jpg" rel="zoom"><img src="img/diz/part8_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		добавим шпангоуты и лонжерон, которые будут придавать детали прочность
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part9.jpg" rel="zoom"><img src="img/diz/part9_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Предпоследняя деталь левой гондолы. Назовем ее собственно - двигатель (т.к. заканчивается она соплом)
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part10.jpg" rel="zoom"><img src="img/diz/part10_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		есть несколько вариантов работы с подобными деталями.<br>
		1 вариант. Оставим, как есть и упростим тут
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part2_1.jpg" rel="zoom"><img src="img/diz/part2_1_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		и тут
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part2_2.jpg" rel="zoom"><img src="img/diz/part2_2_s.jpg" class="-img"  border="0" title="деталь"></a> 
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		чтобы снизить трудозатраты при сборке модели. На точности копии это никоим образом не отобразится, т.к. эти детали станут накладными/декоративными.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		2 вариант<br>
		разделим деталь на части и будем собирать по отдельности.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part2_3.jpg" rel="zoom"><img src="img/diz/part2_3_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Однако, шпангоуты как в нижнюю, так и верхнюю часть все равно надо будет вставить, чтобы их не "вело" при сборке.<br>
		Оставим первый вариант. Приварим шпангоут в сопло и плоскости на накладные "воздухозаборники"
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<b>Центроплан</b>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/wing_plan.jpg" rel="zoom"><img src="img/diz/wing_plan_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Работать будем с этим
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/wing_centroplan.jpg" rel="zoom"><img src="img/diz/wing_centroplan_s.jpg" class="-img"  border="0" title=""></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		отделим детали, отмеченные красным и заполним места их установки заплатками, сделаем каркас
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/karkas.jpg" rel="zoom"><img src="img/diz/karkas_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		в итоге, имеем следующее
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/wing2.jpg" rel="zoom"><img src="img/diz/wing2_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		На правой консоли, необходимо упростить 1 деталь, чтобы не плодить полигоны, облегчая сборку
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/wing1.jpg" rel="zoom"><img src="img/diz/wing1_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Теперь переходим к работе с центральными двигателями/гондолами.<br>
		2 Варианта - работать с одной, а потом скопировать или работать с каждой. Не смотря на то, что времени потратится больше, я работаю с тем, что получил. Стараюсь лишний раз не копировать детали, т.к., при выбросе в Pepacur`у, детали ведут себя непредсказуемо. Поскольку, времени разбираться в причинах своенравного поведения деталей нет - работаю с моделью "как есть"<br>
		Итак, отбросив "наконечник" (в них мы только вставим шпангоуты, как делали ранее), имеем:
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part5.2.jpg" rel="zoom"><img src="img/diz/part5.2_s.jpg" class="-img"  border="0" title="деталь"></a>  
		<a href="img/diz/part5.3.jpg" rel="zoom"><img src="img/diz/part5.3_s.jpg" class="-img"  border="0" title="деталь"></a>  
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		отделим  с днища детали, напоминающие воздухозаборники, и прямоугольные накладки на углах сзади. 
		Сделаем разрезы в местах пересечения боковых стенок с лонжеронами центроплана и займемся "носовой частью"
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part5.1.jpg" rel="zoom"><img src="img/diz/part5.1_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Как видим, часть плоскости крыла входит в плоскую коробочку без разреза. Нужно решить, как будем поступать с этим.<br>
		Как обычно - 2 варианта: отрезать от крыльев или вырезать из коробочки.<br>
		Выбираем второй вариант, т.к. легче будет эти 2 детали монтировать при сборке. Режем.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/Kestrel_center0.jpg" rel="zoom"><img src="img/diz/Kestrel_center0_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		коробку изнутри нужно закрыть плоскостью, которую, в последствии, приварим к корпусу<br>
		<a href="img/diz/Kestrel_center1.jpg" rel="zoom"><img src="img/diz/Kestrel_center1_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Займемся корпусом. Примерный план работ:
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<a href="img/diz/part11.jpg" rel="zoom"><img src="img/diz/part11_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Возможно, понадобится еще 1-2 шпангоута, но с ними проблем быть не должно, т.к. они квадратные. Получаем:
		<a href="img/diz/part13.jpg" rel="zoom"><img src="img/diz/part13_s.jpg" class="-img"  border="0" title="деталь"></a>
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Далее, нам необходимо вставить шпангоуты в сопла, да вырезать отверстия под трубку, проходящую через всю заднюю часть.
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Вот мы вплотную подошли к вопросу <b>Boolean</b>. Одна из самых потрясающих и удобных операций. 
		Вырезать отверстия, разрезать детали в месте пересечения и много всего полезного можно выполнить на нашей модели с помощью Boolean<br> 
		Поэкспериментировав с Boolean, без нее уже не обходишься!
		<br>&nbsp;<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Продолжение будет, но слегка по-позже.
		</div>

		<div class="dash"></div>
        <a class="more-link" href="index.php?page=tutorials">назад <i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a>
    </div>
<!-- postbox -->
    <div><p>&nbsp;</p><p>&nbsp;</p></div>
 </div>

<!-- base -->