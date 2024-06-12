<?php
function displayFilesInDirectory($dir) {
    $files = array_diff(scandir($dir), array('..', '.'));

    foreach ($files as $file) {
        $path = $dir . '/' . $file;
        $content = file_get_contents($path);

        echo '<div class="file-block">';
        echo '<div class="file-name">' . $file . '</div>';
        echo '<div class="file-content">' . $content . '</div>';
        echo '</div>';
    }
}
?>