<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
  function max_number($n1,$n2){
    return ($n1 > $n2) ? $n1 : $n2;
  }
  $a=9;
  $b=21;
  echo '$aと$bのうち最大値は' . max_number($a,$b)."です。";
  ?>

<body>
</body>
</html>