<?php
				function displayImages() {
    // Получаем все файлы с расширениями .jpg и .png
    $images = glob('*.{jpg,png}', GLOB_BRACE);

    // Проверяем, есть ли изображения
    if (!empty($images)) {
        // Выводим каждое изображение в div
        foreach ($images as $image) {
            echo '<div style="display: inline-block; margin-right: 10px; width: 100px;">';
            echo '<img src="' . $image . '" alt="Image" style="width: 100%;">';
            echo '</div>';
        }
    }
}

// Вызываем функцию
displayImages();
?>