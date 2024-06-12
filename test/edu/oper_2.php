<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-language" content="ru">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="expires" content="0">
    <title>Учимся PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<style>
body {font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";}
</style>
<?php
// Функции
function square($num)
{
   $square = $num * $num;
   echo $square;
}	

square(7); // передаем в в функцию значение 7

?>
<br>
<?php
function myfunc($x,$y) {
   $res = cos($x) + sin($y) + 2;
   return $res;
}

$x = 5;
$y = 7;

$z = myfunc($x,$y);

echo $z, "<br>";
/*
Оператор return нужен для того, чтобы функция возвращала какое-то значение. Т.е в нашем случае, мы посчитали нужное нам выражение, занесли его в переменную $res и вернули через оператор return. Если бы мы этого не сделали, то переменная $z была бы пустая.
*/
?>












</body>
</html>