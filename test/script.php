<?php
function displayNews($dir) {
    $files = array_diff(scandir($dir), array('..', '.'));

    foreach ($files as $file) {
        $path = $dir . '/' . $file;
        $content = file($path);
        $date = $file;
        $title = $content[0];
        $description = $content[1];
        $fullText = $content[2];

        echo '<div class="news-block">';
        echo '<div class="date">' . $date . '</div>';
        echo '<div class="news">';

        // Check if image exists
        if (file_exists($path . '/image.jpg')) {
            echo '<div class="image"><img src="' . $path . '/image.jpg"></div>';
        }

        echo '<div class="text">';
        echo '<div class="title">' . $title . '</div>';
        echo '<div class="description">' . $description . '</div>';
        echo '<div class="full-text">' . $fullText . '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
?>