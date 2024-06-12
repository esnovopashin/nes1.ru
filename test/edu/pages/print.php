<html>

<head>

<style type="text/css">

    /*пример оформления версии сайта для печати*/
    @media print {
    body {background:#fff; font-size:1em;}
    .block1, .block2, .block3 {display:none}
    .content {padding:0; margin:0}
    }

</style>

</head>

<body>
<div class="block1">DIV 1</div>

<div>
Содержимое для печати
</div>

<div>DIV 2</div>
<div class="block3">DIV 3</div>
    <a href="#" class="block2" onclick="window.print();return false;">Распечатать</a>

</body>

</html>
