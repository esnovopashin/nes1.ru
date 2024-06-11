<?php
$dir = 'news';// дирректория, в которой лежат новости
$files = scandir($dir);//сканируем дирректорию

// Сортируем массив в обратном порядке, чтобы выводить новости от последней до первой
rsort($files);
//код проходит по каждому файлу в директории $dir.
foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {//Если файл не является текущей директорией (.) и не является родительской директорией (..), то проверяется, является ли этот файл директорией. Если файл является директорией, то
        $filePath = $dir . '/' . $file;//Создается путь к директории
        if (is_dir($filePath)) {
            $news = file($filePath . '/news.txt');//Читается файл news.txt в директории
            $date = $file;//название директории присваивается переменной $date.
            $title = $news[0];//Заголовок новости берется из первой строки файла news.txt.
            $description = $news[1];//Описание новости берется из второй строки файла news.txt.
            $text = $news[2];//Текст новости берется из третьей строки файла news.txt.
            $imagePath = $filePath . '/img.jpg';//Создается путь к изображению новости.

            echo '<div class="cut contentbox  wow fadeInUp" data-wow-offset="50">'; //общее поле карточки
            echo '<div class="date-title">'; // верхний блок с флапами порядкового номера новости + заголовка новости
			//echo '<div class="parent-date">';  флап с порядковым номером
			//echo '<div class="first"></div>';  левый край флапа
			//echo '<div class="child child-date">' . $date . '</div>'; центр флапа с названием папки
			//echo '<div class="third"></div>';  правый край флапа
			//echo '</div>';
			// echo '<div>';class="parent-flap"флап с заголовком
			echo '<div class="first"></div>';
			echo '<div class="child"><strong>' . $title . '</strong></div>';// центр флапа с заголовком
			echo '<div class="third"></div>';
			echo '</div>';
			// echo '</div>';
            echo '<div class="main-news">';//тело новости
			//проверяем, если в папке есть img,
            if (file_exists($imagePath)) {
                echo '<div class="newsImg">';//блок с картинкой
				echo '<img src="' . $imagePath . '" alt="News Image" title="' . $title . '">';//... то выводим ее
				echo '</div>';
            }
            echo '<div class="content-news">';
            echo '<p>' . $description . '</p>';
            echo '<p>' . $text . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
}
?>