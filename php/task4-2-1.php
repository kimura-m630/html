<?php
// 乱数の設定
$rand = rand(1,12);

// 確率の設定
switch ($rand){
  case 1:
  case 2:
  case 12:
    $kisetu = "冬";
    break;
  case 3:
  case 4:
  case 5:
    $kisetu = "春";
    break;
  case 6:
  case 7:
  case 8:
    $kisetu = "夏";
    break;
  case 9:
  case 10:
  case 11:
    $kisetu = "秋";
    break;
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
  <?= $rand ?>月は<?= $kisetu ?>の季節です。
  </h1>
</body>
</html>