<?php
// Проверяем "маркер", и если его нет, то выкидываем в index	
if(!$CORE)
{
header("Location: /index.php");
exit;
}
 //стартуем сессию  session_start();
$pagelink = $_SESSION['pagelink'];
$page = $_SESSION['page'];

if (isset($_SESSION['subdir'])){$subdir = $_SESSION['subdir'];}
	switch ($page) {         // работает
		case 'base':         // если соответствует значению, то
			$title = "NESpapercraft | Главная";      // исполняется этот код
			$description = "NESpapercraft - cайт о бумажном моделировании. Бесплатные развертки моделей фигурок персонажей, предметов и строений из игр. Космические корабли из EVE online. Уроки моделлирования";
			$keywords = "бумажное, моделирование, Lineage, EVE, online, космическ, корабл, kestrel, merlin, ibis, raven, drake, armageddon, Nemizida, elf, gnom, dwarf, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, pepakur, papekur, урок, tutorial, развертки, развертка, выкройка";
			$canonicalURL = $_SESSION['adress']."/"."index.php";
		break;                // вываливаемся из проверки и выполняем то, что после switch
		case 'complete': 
			$title = "NESpapercraft | готовые модели";
			$description = "Собранные и протестированные бумажные модели моего производства. Развертки можно получить бесплатно";
			$keywords = "бумажное, моделирование, Lineage, EVE, online, космическ, корабл, kestrel, merlin, ibis, raven, drake, armageddon, Nemizida, elf, gnom, dwarf, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
		case 'inwork': 
			$title = "NESpapercraft | в работе";
			$description = "Бумажные модели, которые сейчас в разработке и работа по ним, периодически, ведется";
			$keywords = "бумажное, моделирование, Lineage, EVE, online, космическ, корабл, kestrel, merlin, ibis, raven, drake, armageddon, Nemizida, elf, gnom, dwarf, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
		case 'projekt': 
			$title = "NESpapercraft | в проекте";
			$description = "Модели из бумаги, работа по которым планируется, либо есть проект по реализации представленной модели.";
			$keywords = "бумажное, моделирование, Lineage, EVE, online, космическ, корабл, kestrel, merlin, ibis, raven, drake, armageddon, Nemizida, elf, gnom, dwarf, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
		case 'gallery': 
			$title = "NESpapercraft | галерея проектов";
			$description = "Галерея моделей моего производства. Как готовые для скачивания, так и -бета- (без инструкции и маркировки номеров деталей на листе)";
			$keywords = "бумажное, моделирование, Lineage, EVE, online, космическ, корабл, kestrel, merlin, ibis, raven, drake, armageddon, Nemizida, elf, gnom, dwarf, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
			case 'about': 
			$title = "NESpapercraft | о проекте";
			$description = "Немного о себе и этом проекте. С чего все начиналось и для чего это нужно";
			$keywords = "бумажное, моделирование, Lineage, EVE, online, космическ, корабл, kestrel, merlin, ibis, raven, drake, armageddon, Nemizida, elf, gnom, dwarf, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
			case 'tutorials': 
			$title = "NESpapercraft | уроки и статьи";
			$description = "Тут представлены некоторые уроки по моделлингу и процессу создания разверток бумажных моделей по мотивам компьютерных игр на DirectX. Рассказывается об инструментах и материалах";
			$keywords = "бумажное, моделирование, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;		
			case 'tutorial1': 
			$title = "NESpapercraft | урок 1";
			$description = "Что такое papercraft/паперкрафт ? Вытягиваем 3D модель из сцены в игре с помощью 3D Ripper DX. Правим под развертывание в Pepakura. Собираем листы разверток и верстаем выпуск бумажной модели для печати. Почти пошаговая инструкция.";
			$keywords = "papercraft, бумажное, моделирование, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги сделать бесплатно, бумажная модель, разработка, развертки, развертка, игр, 3D, Reaper, Pepacura, пепакура, экспорт, инструкц";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
			case 'tutorial2': 
			$title = "NESpapercraft | урок 2";
			$description = "Как сделать модель крепче? Как разбить будущую модель на детали так, чтобы было легче собирать? В этом уроке показано, где и как разместить каркас внутри будущей модели на примере разборки фрегата из EVE online.";
			$keywords = "бумажное, моделирование, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка,разработка, развертки, развертка, игр, 3D, Reaper, Pepacura, пепакура, экспорт, инструкц";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
			case 'tutorial3': 
			$title = "NESpapercraft | не вредные советы";
			$description = "Papercraft-советы. Выбор бумаги, инструмента. Делюсь своим инвентарем и отвечаю на вопросы. Да и про планирование тоже есть что сказать";
			$keywords = "papercraft, бумажное, моделирование, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка, разработка, развертки, развертка, игр, 3D, Reaper, Pepacura, пепакура, экспорт, инструкц";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
			case 'tutorial4': 
			$title = "NESpapercraft | готовим антисептик";
			$description = "Готовим антисептик в домашних условиях для препятствованию короновирусу COVID-19";
			$keywords = "антисептик, вирус, COVID";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
			case 'tutorial5': 
			$title = "NESpapercraft | советы по работе с COREL";
			$description = "Советы по работе с COREL Draw моделистам";
			$keywords = "совет, моделирование, COREL, урок, правка, заливка, контуры, объекты";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
			case 'zakaz': 
			$title = "NESpapercraft | Заказать модель";
			$description = "Страница заказа разверток бумажной модели";
			$keywords = "бумажное, моделирование, Lineage, EVE, online, космическ, корабл, kestrel, merlin, ibis, raven, drake, armageddon, Nemizida, elf, gnom, dwarf, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
			case 'other': 
			$title = "NESpapercraft | модели из игр не моего производства";
			$description = "Страница, содержащая список моделей из игр НЕ моего производства, найденные в открытых источниках. Скачать нужную модель";
			$keywords = "бумажное, моделирование, Lineage, EVE, online, MechWarrior, BattleTech, MechCommander, Star+Wars, DOOM, Fallout, S.T.A.L.K.E.R., Mass Effect, Warhammer, Final Fantasy, Warcraft, WALL-E, Torchlight, Starcraft, Завтра война, коллекц, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
			case 'betamaster': 
			$title = "NESpapercraft | нужны мастера тестовой сборки";
			$description = "Остро нуждаюсь в моделистах для тестовой сборки моделей из бумаги для выявления неточностей и проблем при склейке";
			$keywords = "бумажное, моделирование, бумаг, фигур, модел, бумаж, модель из бумаги, развертки, развертка, разраб, тест, дизайн";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
			case '404': 
			$title = "404 | страница не найдена | NESpapercraft";
			$description = "страница 404";
			$keywords = "404";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
			case 'for_hr': 
			$title = "NESpapercraft | myDreams";
			$description = "Войти-в-ай-ти кому зазо )))";
			$keywords = "мечты, думы, рассуждалки, HR, разработка, работа, резюме, CV";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink'].$_SESSION['page'];
		break;
	}
	$alting = 'alt="'.$title. '" title="'.$title.'"';
		
if (isset($subdir)){
	switch ($subdir) {
		case 'D3.Stone.Sword':
			$title = "Бумажная модель: Stone Sword =Disciples 3=";
			$description = "Бумажная модель Stone Sword из Disciples 3, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Disciples, Stone, Sword, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."d3StoneSword";
		break;
		case 'D3.Topor.i.Pen':
			$title = "Бумажная модель: Топор и пень =Disciples3=";
			$description = "Бумажная модель: Миниатюра Топор и пень, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, Disciples, миниатюра, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."d3topor";
		break;
		
// модели EVEonline

		case 'EVE.Abaddon':
			$title = "Бумажная модель Abaddon =EVE=";
			$description = "Бумажная модель Abaddon, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Abaddon, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."abaddon";
		break;
		case 'EVE.Absolution':
			$title = "Бумажная модель Absolution =EVE=";
			$description = "Бумажная модель Absolution, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Absolution, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."absolution";
		break;
		case 'EVE.Anathema':
			$title = "Бумажная модель Anathema =EVE=";
			$description = "Бумажная модель Anathema, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Anathema, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."anathema";
		break;
		case 'EVE.Arbitrator':
			$title = "Бумажная модель Arbitrator =EVE=";
			$description = "Бумажная модель Arbitrator, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Arbitrator, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."arbitrator";
		break;
		case 'EVE.Armageddon':
			$title = "Бумажная модель Armageddon =EVE=";
			$description = "Бумажная модель Armageddon, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Armageddon, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."armageddon";
		break;
		case 'EVE.Augor':
			$title = "Бумажная модель Augor =EVE=";
			$description = "Бумажная модель Augor, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Augor, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."augor";
		break;
		case 'EVE.Avatar':
			$title = "Бумажная модель Avatar =EVE=";
			$description = "Бумажная модель Avatar, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Avatar, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."avatar";
		break;
		case 'EVE.Caldari.Bantam':
			$title = "Бумажная модель Bantam =EVE=";
			$description = "Бумажная модель Bantam, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Bantam, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."bantam";
		break;
		case 'EVE.Caldari.Caracal':
			$title = "Бумажная модель Caracal =EVE=";
			$description = "Бумажная модель Caracal, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Caracal, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."caracal";
		break;
		case 'EVE.Caldari.Condor':
			$title = "Бумажная модель Condor =EVE=";
			$description = "Бумажная модель Condor, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Condor, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."condor";
		break;
		case 'EVE.Caldari.Cormorant':
			$title = "Бумажная модель Cormorant =EVE=";
			$description = "Бумажная модель Cormorant, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Cormorant, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."cormorant";
		break;
		case 'EVE.Caldari.Drake':
			$title = "Бумажная модель Drake =EVE=";
			$description = "Бумажная модель Drake, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Drake, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$alting = 'alt="'.$title. '" title="'.$title.'"';
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."drake";
		break;
		case 'EVE.Caldari.Heavy.Missle':
			$title = "Бумажная модель пусковой установки Caldari Heavy Missle II =EVE=";
			$description = "Бумажная модель пусковой установки Caldari Heavy Missle II, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, корабли из игры eve онлайн распечатать а4, EVE, online, космическ, корабл, пусковой установк, Caldari, Heavy, Missle, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."eveheavymissle";
		break;
		case 'EVE.Caldari.Ibis':
			$title = "Бумажная модель корабля Ibis =EVE online=";
			$description = "Бумажная модель корабля Ibis, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, ibis, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."ibis";
		break;
		case 'EVE.Caldari.Ibis.New':
			$title = "Бумажная модель корабля Ibis (new)=EVE online=";
			$description = "Бумажная модель корабля Ibis, новый, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, new, ibis, новый, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."ibis_new";
		break;
		case 'EVE.Caldari.Kestrel':
			$title = "Бумажная модель корабля Kestrel =EVE online=";
			$description = "Бумажная модель корабля Kestrel, развертка, инструкция. Скачать модель ";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, kestrel, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."kestrel";
		break;
		case 'EVE.Caldari.Merlin':
			$title = "Бумажная модель фрегата Merlin =EVE=";
			$description = "Бумажная модель фрегата Merlin, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, merlin, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."merlin";
		break;
		case 'EVE.Caldari.Osprey':
			$title = "Бумажная модель корабля Osprey =EVE online=";
			$description = "Бумажная модель корабля Osprey, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Osprey, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."osprey";
		break;
		case 'EVE.Caldari.Raven':
			$title = "Бумажная модель корабля Raven =EVE online=";
			$description = "Бумажная модель корабля Raven, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Raven, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."raven";
		break;
		case 'EVE.Caldari.Shuttle':
			$title = "Бумажная модель корабля Caldari Shuttle =EVE online=";
			$description = "Бумажная модель корабля Caldari Shuttle, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Caldari, Shuttle, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."shuttle";
		break;
		case 'EVE.Cargo.Container':
			$title = "Бумажная модель Cargo container =EVE=";
			$description = "Бумажная модель Cargo container, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, kestrel, merlin, ibis, raven, drake, armageddon, Cargo, container, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."evecontainer";
		break;
		case 'EVE.Gallente.Vexor':
			$title = "Бумажная модель крузак Gallente - Vexor =EVE=";
			$description = "Бумажная модель крузак Gallente - Vexor, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, крузак, Gallente, Vexor, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."vexor";
		break;
		case 'EVE.Hulk':
			$title = "Бумажная модель Hulk =EVE=";
			$description = "Бумажная модель Hulk, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Hulk, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."hulk";
		break;
		case 'EVE.Megathron':
			$title = "Бумажная модель Megathron =EVE=";
			$description = "Бумажная модель Megathron, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Megathron, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."megathron";
		break;
		case 'EVE.Rifter':
			$title = "Бумажная модель Rifter =EVE=";
			$description = "Бумажная модель Rifter, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Rifter, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."rifter";
		break;
		case 'EVE.Scorpion':
			$title = "Бумажная модель Scorpion =EVE=";
			$description = "Бумажная модель Scorpion, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Scorpion, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."scorpion";
		break;
		case 'EVE.Tayra':
			$title = "Бумажная модель Tayra =EVE=";
			$description = "Бумажная модель Tayra, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, EVE, online, космическ, корабл, Tayra, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."tayra";
		break;

// модели EVEonline

// модели Lineage 2
		case 'LA2.Rudolf':
			$title = "Игрушка из бумаги. Новогодний пет: олень Rudolf =LA2=";
			$description = "Игрушка из бумаги. Новогодний пет: олень Rudolf, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, Lineage, Новогодний, пет, олень, Rudolf, Nemizida, elf, gnom, dwarf, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."rudolf";
		break;
		case 'LA2.Kukla':
			$title = "Игрушка из бумаги. Кукла =LineAge 2=";
			$description = "Игрушка из бумаги. Кукла, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, Lineage, Кукла, elf, gnom, dwarf, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."doll";
		break;
		case 'LA2.Nimi':
			$title = "Бумажная модель. Темная эльфийка NIMIZIDA =LineAge 2=";
			$description = "Бумажная модель фигурки обворожительной темной эльфийки NIMIZIDA, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, Lineage, Nemizida, elf, gnom, dwarf, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."nimi";
		break;
		case 'LA2.Axi':
			$title = "Бумажная модель. Гномка AXI =LineAge 2=";
			$description = "Бумажная модель фигурки очаровательной гномки AXI, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, Lineage, axi, elf, gnom, dwarf, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."axi";
		break;
		case 'LA2.Ded':
			$title = "Бумажная модель - Боевой Гном =LineAge 2=";
			$description = "Бумажная модель - Боевой Гном, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, Lineage, gnom, dwarf, эльф, гном, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."laded";
		break;
		case 'LA2.Dom.1':
			$title = "Бумажная модель: Домик =LineAge 2=";
			$description = "Бумажная модель домика из LineAge 2, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, Lineage 2, дом, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."dommdt";
		break;
		case 'LA2.Dom.2':
			$title = "Бумажная модель: Дворик =LineAge 2=";
			$description = "Бумажная модель Дворик из окрестностей MRT LineAge 2, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, Lineage 2, двор, миниатюра, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."domik";
		break;
		case 'LA2.Cat':
			$title = "Бумажная модель: рейд-босс mr.CAT =LineAge 2=";
			$description = "Бумажная модель рейд-босса - Кота из LineAge 2, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, Lineage 2, кот, фигурк, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."lacat";
		break;
		case 'LA2.Kisa':
			$title = "Бумажная модель: миник Mumu - Киска =LineAge 2=";
			$description = "Бумажная модель миника Mumu - Киски из LineAge 2, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, Lineage 2, киса, фигурк, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."lakisa";
		break;
		case 'LA2.Unicorn':
			$title = "Бумажная модель: рейд-босс Unicorn =LineAge 2=";
			$description = "Бумажная модель рейд-босса Единорог из LineAge 2, развертка, инструкция. Скачать модель";
			$keywords = "бумажное, моделирование, Lineage 2, unicorn, единорог, фигурк, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."uni";
		break;
		case 'LA2.Giran.Castle':
			$title = "Бумажная модель: замок в окрестности Гирана =LineAge 2=";
			$description = "Бумажная модель замка в окрестностях Гирана из LineAge 2, бесплатная развертка. Скачать модель бесплатно";
			$keywords = "бумажное, моделирование, Lineаge 2, замок, Гиран, Giran, castle, макет, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."castlegir";
		break;
		case 'LA2.Angel.Slayer':
			$title = "Бумажная модель: меч Angel Slayer =LineAge 2=";
			$description = "Бумажная модель меча Angel Slayer из LineAge 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Lineаge 2, Angel, Slayer, меч, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."angelslayer";
		break;
		case 'LA2.Dragon.Slayer':
			$title = "Бумажная модель: меч Dragon Slayer =LineAge 2=";
			$description = "Бумажная модель меча Dragon Slayer из LineAge 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, меч драгон слеер своими руками, дракон слеер из картона, Lineаge 2, Dragon, Slayer, меч, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."dragonslayer";
		break;
		case 'LA2.Siras.Blade':
			$title = "Бумажная модель: меч Sira`s Blade =LineAge 2=";
			$description = "Бумажная модель меча Sira`s Blade из LineAge 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Lineаge 2, Sira`s, Blade, меч, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."sirasblade";
		break;
		case 'LA2.Yaxa.Mace':
			$title = "Бумажная модель: булава Yaxa Mace =LineAge 2=";
			$description = "Бумажная модель булавы Yaxa Mace из LineAge 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Lineаge 2, булава, Yaxa, Mace, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."yaxa";
		break;
		case 'LA2.Sarnga':
			$title = "Бумажная модель: арбалет Sarnga =LineAge 2=";
			$description = "Бумажная модель арбалета Sarnga из LineAge 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Lineаge 2, арбалета Sarnga, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."sarnga";
		break;
		case 'LA2.Samurai.Long.Sword':
			$title = "Бумажная модель: меч Samurai Long Sword =LineAge 2=";
			$description = "Бумажная модель меча Samurai Long Sword из LineAge 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Lineаge 2, меч, Samurai, Long, Sword, катана, длинн, самурайск, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."samurailongsword";
		break;
		case 'LA2.Full.Plate.Shield':
			$title = "Бумажная модель: щит Full Plate Shield =LineAge 2=";
			$description = "Бумажная модель щита Full Plate Shield из LineAge 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Lineаge 2, щит, Full, Plate, Shield, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."fps";
		break;
		case 'LA2.Imperial.Crusade.Shield':
			$title = "Бумажная модель: щит Imperial Crusade Shield =LineAge 2=";
			$description = "Бумажная модель щита Imperial Crusade Shield из LineAge 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Lineаge 2, щит, Imperial, Crusade, Shield, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."ics";
		break;
		case 'LA2.Kite.Shield':
			$title = "Бумажная модель: щит Imperial Kite Shield =LineAge 2=";
			$description = "Бумажная модель щита Imperial Kite Shield из LineAge 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Lineаge 2, щит, Imperial, Kite, Shield, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."kiteshield";
		break;
		case 'LA2.Doom.Shield':
			$title = "Бумажная модель: щит Imperial Doom Shield =LineAge 2=";
			$description = "Бумажная модель щита Imperial Doom Shield из LineAge 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Lineаge 2, щит, Imperial, Doom, Shield, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."doomshield";
		break;
// модели Lineage 2

// модели Torchlight 2
		case 'TL.Ashen.Wand':
			$title = "Бумажная модель: Ashen Wand =Torchlight 2=";
			$description = "Бумажная модель Ashen Wand из Torchlight 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Torchlight 2, Ashen, Wand, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."ashenwand";
		break;
		case 'TL.Beryl.Iron.Eclipse':
			$title = "Бумажная модель: Beryl Iron Eclipse =Torchlight 2=";
			$description = "Бумажная модель Beryl Iron Eclipse из Torchlight 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Torchlight 2, Beryl, Iron, Eclipse, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."bie";
		break;
		case 'TL.Braced.Bulwark.Shield':
			$title = "Бумажная модель: Braced Bulwark Shield =Torchlight 2=";
			$description = "Бумажная модель Braced Bulwark Shield из Torchlight 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Torchlight 2, Braced, Bulwark, Shield, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."bbs";
		break;
		case 'TL.Cyclop':
			$title = "Бумажная модель: трофей голова Циклопа =Torchlight 2=";
			$description = "Бумажная модель трофей голова Циклопа из Torchlight 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Torchlight 2, циклоп, голова, трофей, cyclop, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."cyclophead";
		break;
		case 'TL.Fiery.Polished.Shiv':
			$title = "Бумажная модель: Fiery Polished Shiv =Torchlight 2=";
			$description = "Бумажная модель Fiery Polished Shiv из Torchlight 2, развертка. Скачать модель";
			$keywords = "бумажное, моделирование, Torchlight 2, Fiery, Polished, Shiv, игрушк, бумаг, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."fpshiv";
		break;
// модели Torchlight 2

// модели из других игр
		case 'PW.Cat.Trader':
			$title = "Игрушка из бумаги. Котик-трейдер =Perfect World=";
			$description = 'Игрушка из бумаги. Котик-трейдер, развертка, инструкция. Скачать модель';
			$keywords = "бумажное, моделирование, Perfect, World, кот, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."pwcat";
		break;
		case 'Fallout3.Pups':
			$title = "Бумажная модель. Коллекционный набор пупсов. Fallout3";
			$description = "Бумажная модель. Оригинальный коллекционный набор пупсов для фаната Fallout3, развертки, инструкции. Скачать модель";
			$keywords = "бумажное, моделирование, фоллаут миньки из бумаги, фигурка пупса фоллаут, пупсы в фоллаут 3, кастомная фигурка фоллаут 3, Fallout, пупс, набор, альбом, бумаг, фигур, модел, бумаж, модель из бумаги скачать бесплатно, бумажная модель скачать бесплатно, развертки, развертка";
			$canonicalURL = $_SESSION['adress']."/".$_SESSION['pagelink']."falloutpups";
		break;
// модели из других игр

	}
	$alting = 'alt="'.$title. '" title="'.$title.'"';
	$_SESSION['dir'] = 'models';
	$_SESSION['page'] = 'model.page';
}

?>
    <script>
        function openModal(src) {
            var modal = document.createElement('div');
            modal.id = 'myModal';
            modal.className = 'modal';

            var img = document.createElement('img');
            img.className = 'modal-content';
            img.src = src;

            img.onclick = function() {
                modal.style.display = 'none';
            }

            modal.appendChild(img);
            document.body.appendChild(modal);
            modal.style.display = 'block';
        }
    </script>