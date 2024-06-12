<?php/*

function createImageBlock() {
    // Путь к файлам
    $imagePath = 'img.jpg';
    $previewPath = 'img_s.jpg';
    $titlePath = 'title.php';

    // Создаем HTML-код
    $html = '<div class="image-block">';
    $html .= '<div class="image-preview" onclick="openModal(\'' . $imagePath . '\')">';
    $html .= '<img src="' . $previewPath . '">';
    $html .= '</div>';
    $html .= '<div class="image-title">';

    // Получаем контент из файла title.php
    if (file_exists($titlePath)) {
        ob_start();
        include $titlePath;
        $html .= ob_get_clean();
    }

    $html .= '</div>';
    $html .= '</div>';

    return $html;
}
*/
?><!--
<!DOCTYPE html>
<html>
<head>
    <style>/*
        .image-block {
            width: 150px;
        }
        .image-preview {
            margin: 0;
            width: 100%;
            height: auto;
            cursor: pointer;
        }
        .image-title {
            width: 100%;
            height: auto;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }*/
    </style>
</head>
<body>-->
    <?php echo createImageBlock(); ?>

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
<!--</body>
</html>-->