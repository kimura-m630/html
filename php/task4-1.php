<?php
// 乱数の設定
$rand = rand(1, 100);

// 確率の設定
if ($rand >= 96) {
  $omikuji = "大凶";
} elseif ($rand >= 81) {
  $omikuji = "凶";
} elseif ($rand >= 51) {
  $omikuji = "吉";
} elseif ($rand >= 21) {
  $omikuji = "中吉";
} else {
  $omikuji = "大吉";
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
    今日の運勢は”<?= $omikuji ?>”です。
  </h1>
</body>
</html>