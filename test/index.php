<?php
// Включаем отображение ошибок
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Включаем уведомления
echo '<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>';

// Путь к папке с файлами
$dir = 'news/news_1/';

// Путь к файлу с текстом
$file = $dir . 'post1.txt';

// Путь к файлу с картинкой
$image = $dir . 'img.jpg';

// Проверяем, существует ли файл
if (file_exists($file)) {
    // Открываем файл для чтения
    $handle = fopen($file, 'r');

    // Читаем файл
    $contents = fread($handle, filesize($file));

    // Закрываем файл
    fclose($handle);

    // Выводим содержимое файла
    echo $contents;
} else {
    echo 'Файл не найден.';
}

// Проверяем, существует ли файл
if (file_exists($image)) {
    // Выводим картинку
    echo '<img src="' . $image . '" alt="Image">';
} else {
    echo 'Картинка не найдена.';
}

echo '</body>
</html>';
?>
