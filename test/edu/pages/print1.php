<html>

<head>

<style type="text/css">

@media print {
  .noprint { display: none; }
  
}

</style>

</head>

<body>
<div>DIV 1</div>
<div id="print-content">
Содержимое для печати


</div>
<div>DIV 2</div>
<div class=="noprint">DIV 3</div>
<a onClick="javascript:CallPrint('print-content');" title="Распечатать проект">Распечатать</a>
<script>
function CallPrint(strid) {
  var prtContent = document.getElementById(strid);
  var WinPrint = window.open('','','left=50,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
  WinPrint.document.write('');
  WinPrint.document.write(prtContent.innerHTML);
  WinPrint.document.write('');
  WinPrint.document.close();
  WinPrint.focus();
  WinPrint.print();
  WinPrint.close();
  prtContent.innerHTML=strOldOne;
}
</script>
</body>

</html>
