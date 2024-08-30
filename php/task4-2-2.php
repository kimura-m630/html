<?php
// 乱数の設定
$rand = rand(1,12);

// 確率の設定
if ($rand >= 3 && $rand <=5 ) {
  $kisetu = "春";
} elseif ($rand >= 6 && $rand <=8) {
  $kisetu = "夏";
} elseif ($rand >= 9 && $rand <=11) {
  $kisetu = "秋";
} else{
  $kisetu = "冬";
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