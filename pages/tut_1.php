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
 Если у Вас не хватает терпения или скилов для написания статей НА СОБСТВЕННОМ ОПЫТЕ, и Вы вынуждены брать труд других людей, будьте добры, любым удобным способом, сообщите об авторстве данного текста! (например, вставтье этот код в свою страницу: <p>Оригинал статьи по адресу: <a href="https://nes1.ru/tutorials.php"> перейти</a></p> ) -->
 <p>Для начала, ответим на очень частый вопрос: "Что такое papercraft?"</p>
 <p>Papercraft - в различных руках и значениях, несет различный смысл: от "поделок из бумаги" и фигурок в техниках оригами/киригами до "настольного макетирования чего-либо мега-крутого из бумаги" (когда-нибудь видели архитектурные макеты, площадью в 5м2 ?).<br>
 Все просто. Создание объемного объекта реального мира из плоского листа бумаги - это papercraft.<br>
 Нас же интересует не реальный мир, а объекты виртуального мира, который мы будем вытаскивать с той стороны экрана к нам на стол/полку/витринку.<br></p>
		<h1>Как экспортировать модель из игры?</h1>
		<p>Вы достигли первоисточника.</p>
		<p>Это - ПЕРВЫЙ и самый ОРИГИНАЛЬНЫЙ, полный тутор по импорту моделей из игр на DirectX.</p>
		<p>К сожалению, перепечатывая материалы, другие владельцы ресурсов не удосуживаются назвать автора этой статьи.</p>
		
		<p>Начнем.</p>
		<p>!!! ВАЖНО !!!</p>
		<p> Для тех, кто еще не знаком с основами моделирования в среде 3DМАХ - ОБЯЗАТЕЛЬНО выучите и выполните уроки от уважаемого ACTIVATOR (эти уроки были на форуме, но их удалили. А т.к. считаю их очень полезными "на старте", решил сохранить)<br> 
			<a href="https://nes1.ru/files/APG_2_-_Lessons_part_1_of_3" title="проектирование бумажных моделей в среде 3D MAX" target="_blank" rel= "noopener noreferrer">урок1&nbsp;&nbsp;<i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a><br>
			<a href="https://nes1.ru/files/APG_2_-_Lessons_part_2_of_3" title="проектирование бумажных моделей в среде 3D MAX" target="_blank" rel= "noopener noreferrer">урок2&nbsp;&nbsp;<i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a><br>
			<a href="https://nes1.ru/files/APG_2_-_Lessons_part_3_of_3" title="проектирование бумажных моделей в среде 3D MAX" target="_blank" rel= "noopener noreferrer">урок3&nbsp;&nbsp;<i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a><br>
		</p>&nbsp;
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>Итак, начали!</p>
		&nbsp;
		<p><strong>Этап 1. Подготовка.</strong></p>
		<p>Наличие 3D MAX`а - как само собой.</p>
		<p>Устанавливаем игру/сервер с игрой (я пользовался аккаунтом друзей, чтобы "поснимать" объекты).</p>
		<p>Устанавливаем <a href="https://www.deep-shadows.com/hax/3DRipperDX.htm" target="_blank" rel= "noopener noreferrer">3D ripper DX <i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a> 
			указываем папку, где лежит запускающий_игруху.exe
		<p>
			<a href="img/diz/3drip_w.jpg" rel="zoom"><img class="-img" src="img/diz/3drip_w.jpg" align="middle" border="0"></a>
		</p>
		<p>Устанавливаем <a href="https://www.tamasoft.co.jp/pepakura-en/" target="_blank" rel= "noopener noreferrer">Papekura Designer <i class="fa fa-external-link" aria-hidden="true" style="font-size:12px"></i></a></p> 
		<p>В настройках видюхи выставляем обработку directx а не OpenGL</p>
		<br>&nbsp;</br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p><strong>Этап 2. Съемка.</strong></p>
		<p>Жмакаем Здрипер, жмакаем "Launch",</p>
		<p>
			<a href="img/diz/launch.jpg" rel="zoom"><img class="-img" src="img/diz/launch.jpg"  align="middle" border="0"></a>
		</p>
		<p>он стартует игрулю.</p>
		<p>
			<a href="img/diz/AXI_start_w.jpg" rel="zoom"><img class="-img" src="img/diz/AXI_start_w.jpg"  align="middle" border="0"></a>
		</p>
		<p>Желательно, чтобы объект не сильно перемещался в пространстве в момент съемки, но не обязательно</p>
		<p>жмем кнопку, назначенную в рипере за съемку. </p>
		<p>&nbsp;
			<a href="img/diz/Capture Key.jpg" rel="zoom"><img class="-img" src="img/diz/Capture Key.jpg" align="middle" border="0"></a>
		</p>&nbsp;
		<div class="wow fadeInUp" data-wow-offset="50">
		<p><b>*ВАЖНО!</b> Некоторые игры имеют различные системы защиты, которые могут выбросить вас из игры.</p> 
		<p>Все творчество закончится на этом этапе.<br>
			Выброс из игры также может быть следствием того, что игра использует OpenGL или иной граф.движок, отличный от DirectX.<br> 
			В этом случае, если объект вам особенно интересен, то можете воспользоваться поисковыми системами и найти в Интернете утилиты для импорта необходимого содержимого вашей игры.</p>
		<p>Ждем. Закрываем игрулю, если нам от нее ничего не надо больше.</p>
		<p>Собственно, все, сняли.</p>
		<p><strong>Этап 3. Импорт.</strong></p>
		<p>Открываем Макса.</p>
		<p>Жмем "Import"</p>
		<p>Находим папку Frames (по тому пути, который Вы назначали в рипере)</p>
		<p>у меня был:</p>
			<a href="img/diz/frames.jpg" rel="zoom"><img class="-img" src="img/diz/frames.jpg" border="0"></a>
			<br>
		<p>выбираем нужный фрейм.</p>
		<a href="img/diz/max_frame.jpg" rel="zoom"><img class="-img" src="img/diz/max_frame.jpg" border="0"></a>
		<br>
		<p>Ждем, когда подгрузится</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>FOV - это условный угол зрения на объект. Monitor aspect ratio подсказывает, какой аспект предпочтителен.<br>
			Наилучшим значением является то, которое (в выпадающем меню Recommended value) соответствует или близко аспекту и FOV.<br>
			В окне импорта выбираем из выпадающего меню Recommended Values значение FOV, наиболее близкое к 40 (если их несколько), 
			тогда искажений формы будет минимум</p>
		<p>Например:</p>
		<a href="img/diz/max_import.jpg" rel="zoom"><img class="-img" src="img/diz/max_import.jpg" border="0"></a>
		<p>Обратите внимание на опцию "Remove Double Faces".</p>
		<p>Если в модели присутствуют двухсторонние поверхности (как на щите гномки, голове булавы), советую снять галочку в 	этой опции. 
		Иначе - будет не закрашенная/безтекстурная поверхность.
		</p>
		<br>
		<p>Готово...</p>
		<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p><strong>Этап 4. Правка в Максе.</strong></p>
		<br>
		<p>0. После того, как Ваша сцена импортируется, Вы не увидите своего персонажа сразу. 
			Почему? Потому что в сцене присутствует все, что окружало Ваш объект на момент съемки!. 
			Иногда это пространство сопоставимо площади в несколько десятков квадратных километров. 
			Не унываем, т.к. найти искомое поможет принцип Макиавелли (если память не изменяет): просто удалите все ненужное
		</p>&nbsp;<br>
		<a href="img/diz/unstr_import_w.jpg" rel="zoom"><img class="-img" src="img/diz/unstr_import_w.jpg" border="0"></a>
		<br>
		<p>Совет: <i>Возможно, в центре всей сцены будет висеть ОГРОМНЫЙ черный ящик - это была Ваша камера! Где-то рядом то, что Вам нужно.</i>
		</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>1. Удалив все не нужное (именно удалив, а не скрыв), выровняйте фигуру по всем 3м осям по центру. 
			Старайтесь поставить объект СТРОГО перпендикулярно оси XY. 
			Это позволит Вам легче работать над правкой модели и Вы сможете точно расчитать размеры конечной модели, масштаб и т.п.
			<br>
			Хотя, строго вертикальное положение Вы можете придать модели и после работы с ней.
		</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>2. ОБЯЗАТЕЛЬНО поднимите модель хотя бы на 1 мм над плоскостью</p>
		<a href="img/diz/max_pravka1_800_w.jpg" rel="zoom"><img class="-img" src="img/diz/max_pravka1_800_w.jpg" border="0"></a>
		<br>
		<p>	Это избавит от проблем при работе с Пепакурой.</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>3. Удаляем все лишние артефакты, объекты, косяки при помощи модификатора Editable Mash 
			(не смогу научить максу. обращайтесь за уроками в том же Гугле) т.к. слоев там - море и они могут, в последствии, вылезти.
			<br>
			Оставшуюся модель выделите полностью и отконвертируйте ее в редактируемые полигоны: ПКМ ->Convert to Editable Poly
			<br>
			Разделите модель на части (модули), т.е., например, отделите руки друг от друга (часто - это один объект) и от туловища, голенища сапог - от ботинка и т.п...
			<br>
			Откорректируйте все пересекающиеся друг с другом плоскости, разрезав их по линии пересечения. Удалите все, что "болтается" внутри модели.
			<br>
			Работаем с каждым модулем отдельно, скрыв все остальные - чтобы не мешались
		</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p><i><b>*Совет</b> Разделите модель по деталям, из которых она будет собираться в бумаге. В Пепе разделить получится, но криво. 
			Лучше этот процесс провести на этапе редактирования, тогда в Пепу поступят уже размеченные детали для развертки.</i>
		</p>
		<p>Теперь нам предстоит заполнить плоскостями места крепежа модулей друг с другом.</p>
		<p><i><b>*ВАЖНО</b> Всегда сохраняйте этапы работы под разными файлами!!!</p> 
		<p>Например: разделил фигурку на части - save as... - AXI_cut_all.max., откорректировал волосы - save as... - AX_hair_0.max, и.т. 
		Это необходимо, чтобы Вы всегда смогли вернуться к необходимому этапу работы.</i></p>
		<p>Конструкторам всяческой техники предстоит удалить лишние части деталей, продолжающиеся внутрь корпуса, разрезать и упростить трубки/балки/плоскости, тянущиеся через несколько деталей, упростить различные поверхности 2й кривизны... 
		самостоятельно разработать и вставить каркасы, переборки, шпангоуты, лонжероны...
		<br>
		заполнить плоскостями места крепления модулей друг к другу.</p>
		<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		Немного из объемов работ (на основе одного из разборов модели и постановки задачи):
		<br>		
		<a href="img/_other/hyprion_1_w.jpg" rel="zoom"><img src="img/_other/hyprion_1_150.jpg" alt="Сheck Hyprion" height="150" border="0" style="margin:5px;"></a>
		<a href="img/_other/hyprion_2_w.jpg" rel="zoom"><img src="img/_other/hyprion_2_150.jpg" alt="Сheck Hyprion" height="150" border="0" style="margin:5px;"></a>
		<a href="img/_other/hyprion_3_w.jpg" rel="zoom"><img src="img/_other/hyprion_3_150.jpg" alt="Сheck Hyprion" height="150" border="0" style="margin:5px;"></a>
		<a href="img/_other/hyprion_4_w.jpg" rel="zoom"><img src="img/_other/hyprion_4_150.jpg" alt="Сheck Hyprion" height="150" border="0" style="margin:5px;"></a>
		<a href="img/_other/hyprion_5_w.jpg" rel="zoom"><img src="img/_other/hyprion_5_150.jpg" alt="Сheck Hyprion" height="150" border="0" style="margin:5px;"></a>
		<a href="img/_other/hyprion_6_w.jpg" rel="zoom"><img src="img/_other/hyprion_6_150.jpg" alt="Сheck Hyprion" height="150" border="0" style="margin:5px;"></a>
		<a href="img/_other/hyprion_7_w.jpg" rel="zoom"><img src="img/_other/hyprion_7_150.jpg" alt="Сheck Hyprion" height="150" border="0" style="margin:5px;"></a>
		<a href="img/_other/hyprion_8_w.jpg" rel="zoom"><img src="img/_other/hyprion_8_150.jpg" alt="Сheck Hyprion" height="150" border="0" style="margin:5px;"></a>
		<a href="img/_other/hyprion_9_w.jpg" rel="zoom"><img src="img/_other/hyprion_9_150.jpg" alt="Сheck Hyprion" height="150" border="0" style="margin:5px;"></a>
		<a href="img/_other/hyprion_10_w.jpg" rel="zoom"><img src="img/_other/hyprion_10_150.jpg" alt="Сheck Hyprion" height="150" border="0" style="margin:5px;"></a>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<br>&nbsp;<br>
		<p>4. Не забудьте после правки объединить модель (или самые большие ее части) в единый объект</p>
		<p>5. Выделяем всю модель.</p>
		<p>6. Файл - Экспорт выделенного - выбраем формат .3DS</p>
		<a href="img/diz/max_exprt.jpg" rel="zoom"><img class="-img" src="img/diz/max_exprt.jpg" border="0"></a>
		<br>
		<p>Не закрываем Макс он нам еще понадобится</p>
		<p>Открываем Пепакуру. (Приведен вариант работы в Pepakura v.2... я не работаю в 3, т.к. глючная)</p>
		<p>Файл - Открыть - Ваш_файл.3DS</p>
		<p>Должно быть что-то такое:</p>
		<a href="img/diz/papekura1.jpg" rel="zoom"><img class="-img" src="img/diz/papekura1.jpg" border="0"></a>
		<br>
		<p>Жмем ОК, а дальше...</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>можете покрасить оборотную в серый цвет ))) Я так и не понял, зачем это надо ... </p>
		<a href="img/diz/papekura2.jpg" rel="zoom"><img class="-img" src="img/diz/papekura2.jpg" border="0"></a>
		<br>
		<p>No flip - next - next - No Invert - да - ok</p>
		<p>... загрузили ...</p>
		<p>видим что-то такое серое ...</p>
		<a href="img/diz/papekura3_800_w.jpg" rel="zoom"><img class="-img" src="img/diz/papekura3_800_w.jpg" border="0"></a>
		<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p><strong>Этап 5. Правка в Пепакуре.</strong></p>
		<p>Обратите внимание. что зеленые толстые линии - границы части</p>
		<p>Голубые линии сгиб "внутрь" (т.е. грань поднимается)</p>
		<p>Синие - "наружу" (т.е. грань опускается)</p>
		<a href="img/diz/papekura4_w.jpg" rel="zoom"><img class="-img" src="img/diz/papekura4_w.jpg" border="0"></a>
		<br>
		<p>Хотя, Вы можете самостоятельно назначить цвета для ребер.</p>
		<p>1. Подгрузим текстуры.</p>
		<p>3DModelWindow - Texture Configuration - </p>
		<a href="img/diz/papekura5.jpg" rel="zoom"><img class="-img" src="img/diz/papekura5.jpg" border="0"></a>
		<br>
		<p>В открывшемся окне, дважды кликаем на обозначении текстуры - открывается окошко, из которого копируем название файла с ней.
		<br>Окно не закрываем
		</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>В МАКСе:</p>

		<p>Файл - трассировка актива (Shift+T)
			<br>
			находим текстуру с тем же номером
			<br>
			правый клик - "просмотр файла рисунка" - на иконке с дискетой - назначаем путь к Texture Archive в любой удобной Вам папке 
			<br>
			Сохраняем в формате .bmp 24bit (можно и JPG, но тогда при распечатке развертки будьте готовы к стандартным JPG приколам)
		</p>
		<a href="img/diz/papekura6.jpg" rel="zoom"><img class="-img" src="img/diz/papekura6.jpg" border="0"></a>
		<p>Идем в Пепакуру, жмем Specify Texture Image... находим наш .bmp
			<br>
			ОК
			<br>
			и так далее.
		</p>

		<p>Текстуры с нолями не трогаем.
			<br>
			все ...
		</p>
		<br>
		<a href="img/diz/papekura7_800_w.jpg" rel="zoom"><img class="-img" src="img/diz/papekura7_800_w.jpg" border="0"></a>
		<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>2. Назначим линии разреза</p>
		<p>Берем ножичек (иконка в меню Пепакуры) и нарезаем, отмечая линии
			разборки модели, ибо Пепакура - прога умная, но иногда так разбирает,
			что не понять, куда что делось )))
		</p>
		<br>
		<a href="img/diz/papekura8_800_w.jpg" rel="zoom"><img class="-img" src="img/diz/papekura8_800_w.jpg" border="0"></a>
		<br>
		<p>После этого нам необходимо поправить все возможные пересечения плоскостей, с помощью очень удобного инструмента - EditModel
		</p>
		<br>
		<a href="img/diz/papekura9_w.jpg" rel="zoom"><img class="-img" src="img/diz/papekura9_w.jpg" border="0"></a>
		<br>
		<p>Используя функции из меню, поправьте модель для более удачного "разворота" в бумагу.</p>
		<p>Процесс длительный, но набравшись терпения, доводим модель до идеала - это восполнится потом стОрицей.</p>
		<p><strong>Этап 6. Развертка</strong></p>
		<p>Снимаем галку Auto</p>
		<p>Жмем Unfold</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>В меню:</p>
		<br>
		<a href="img/diz/papekura12.jpg" rel="zoom"><img class="-img" src="img/diz/papekura12.jpg" border="0"></a>
		<br>
		<p>Ставим точку в кнопке Specify Value
			<br>
			самостоятельно выставьте высоту.
			<br>
			Определите расстояние между деталями.
			<br>
			<br>
			ОК
		</p>
		<br>
		<a href="img/diz/papekura10_800_w.jpg" rel="zoom"><img class="-img" src="img/diz/papekura10_800_w.jpg" border="0"></a>
		<br>
		<p>Не пугаемся )))</p>
		<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p><strong>Этап 7. Виртуальная сборка модели. Печать.</strong></p>
		<p>Теперь нам предстоит собрать все воедино.
			<br>
			Дело в том, что прога разворачивает чисто математически. она не может себе представить, как все клеить. ))))
		</p>
		<p>"Склеиваем" детали так, как нам нужно. Разобраться не сложно)</p>
		<p>Совет: <i>собирайте детали поочередно, группируя части так, чтобы не искать их по всем листам потом)</i></p>
		<p>Первый иинструмент - это "Select and Move" <img class="-img" src="img/diz/select_n_move.gif" border="0"></p>
		<p>С помощью него, кликнув на 2D часть, мы перетаскиваем детали максимально близко друг к другу, уменьшая количество листов.
			<br>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
			Детали компоновать лучше по соседству, т.о., чтобы собирая модель, не пришлось вырезать их из разных листов.<br>
			Будьте последовательны и логичны. Т.е., если модель собирается из нескольких частей, последовательно крепящихся друг к другу, то и располагайте эти части на однном листе. Помните, что другой человек (не олько для себя ведь делаем, правда?) не обладает даром ясновидения и не сможет угадать, как Вы представляли себе сборку. Уважайте конечного пользователя, тогда после сборки Вашей модели будут только хорошие ощущения. Кстати, и у Вас самих
		</p>
		<p>В помощи ему приходит инструмент "Check Corresponding Face" <img class="-img" src="img/diz/check_corresponding_face.gif" border="0">
			<br>
			Нажав на интересующую нас деталь, мы увидим ее на листе, заполненную красным цветом. Как тут:
			<br> 
			<a href="img/diz/pict4_w.gif" rel="zoom"><img class="-img" src="img/diz/pict4_0.jpg" alt="Сheck Сorresponding Face" border="0"></a>
		</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>Итак, отметили, нашли на листе, переместили к соседним. Пока так.
			<br>
		</p>
		<p>Переместили. Все правиьно, куча-кучей.
			<br>
			Пришло время поворачивать, склеивать/резать
			<br>
			На помощь приходит инструмент "Part Rotate" <img src="img/diz/part_rotate.gif" style="width:25px;height:26px;" border="0">
			<br>
		</p>
		<p>Кликаете на деталь, появляются красные кружки на углах детали.
			<br> 
		<a href="img/diz/pict1.gif" rel="zoom"><img class="-img" src="img/diz/pict1_0.jpg" alt="Part Rotate" width="150" height="113" border="0"></a>
		</p>
		<p>
			Если кликнуть по одному из них, то эта точка станет центром вращения детали. Кликаете, зажав лев.кл.мыши на любом месте детали, не отпуская кнопки, вращаете ее на необходимый угол. Все просто, не правда ли?
			<br> 
			<a href="img/diz/pict3.gif" rel="zoom"><img class="-img" src="img/diz/pict3_0.jpg" alt="Part Rotate" width="150" height="111" border="0"></a>
		</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>
			Теперь нам нужно соеденить те части, которые Пепа разъеденила зря.
			<br>
			Берем в руки виртуальный клей - "Divide/Connect Faces" <img class="-img" src="img/diz/divide.connect_faces.gif" style="width:25px;height:26px;" border="0"> (Моя любимая часть работы)
			<br> 
		</p>
		<p>При наведении на ребро детали (2D) мы видим красную стрелку, которая указывает на другое ребро, которое можно присоеденить к первой.
			<br> 
			<a href="img/diz/pict2.gif" rel="zoom"><img class="-img" src="img/diz/pict2_0.jpg" alt="Divide/Connect Faces" width="150" border="0"></a>
			<br>
			2 клика. Склеиваем. Не подходит? Наведя на деталь курсор, мы видим зеленую полоску. Если на нее нажать, деталь разрежется по этой полоске. Этот инструмент работает и на 3D виде.
			<br>
			Если что-то напортачили, всегда есть <i>Ctrl+Z</i> ;)
		</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>Совет: <i>Помните о размерах деталей! Посмотрите и прикиньте, можно ли такую вырезать ножницами? На всякий случай, первоначально, установите высоту флапов 1mm и ориентирутесь по ней.</i>
		</p>
		<p>Времязатраты - огромны, поэтому я работаю ночью, когда никто не мешает.</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>
			Совет: <i>если обнаружите лишние детали можете вынести их на серое поле. Они печататься не будут</i></p>
		<p>На этом этапапе вы уже видите, ощущаете, как будет собираться модель.</p>
		<p>В итоге, мы видим примерно вот такое:</p>
			<br>
			<a href="img/diz/papekura11_800_w.jpg" rel="zoom"><img class="-img" src="img/diz/papekura11_800_w.jpg"  style="max-width:50%;margin:10px" border="0"></a>
			<br>
		<p>Все, парни!
			<br>
			Готово!
			<br>
			жмем печать.
			<br>
			СОБИРАЕМ !!!
		</p>
		</div>
		<div class="wow fadeInUp" data-wow-offset="50">
		<p>Если есть, что добавить, спросить - пишите, чем смогу, помогу. Про МАКС только не спрашивайте - сам еще учусь )))</p>
		<p>Второй тутор по работе с моделями из игр можно посмотреть, нажав на кнопель ниже.</p>
		<p>&nbsp;</p>
		</div>
	</div>
	<div class="dash"></div>
        <a class="more-link" href="index.php?page=tutorial2">Урок 2</a>
    </div>
<!-- postbox -->
    <div><p>&nbsp;</p><p>&nbsp;</p></div>
	</div>
<!-- base -->