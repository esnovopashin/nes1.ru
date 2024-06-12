<!-- https://intop24.ru/article_15_lesson_4.php
     https://daruse.ru/vyivod-dannyix-iz-mysql-v-php
-->
<?php
// Закрываем сессию и все удаляем
// http://komotoz.ru/uroki/php/sessii_v_php.php
session_unset();
session_destroy();
setcookie(session_name(), '', time() - 60*60*24*32, '/');
// Закрыть подключение
mysqli_close($conn);
?>