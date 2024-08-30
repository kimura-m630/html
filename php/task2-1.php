<?php
  // 1週間の日付を配列に格納
  $Week = array(
      '月曜日',
      '火曜日',
      '水曜日',
      '木曜日',
      '金曜日',
      '土曜日',
      '日曜日'
  );
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <ul>
    <li><?= $Week[0]?></li>
    <li><?= $Week[1]?></li>
    <li><?= $Week[2]?></li>
    <li><?= $Week[3]?></li>
    <li><?= $Week[4]?></li>
    <li><?= $Week[5]?></li>
    <li><?= $Week[6]?></li>
  </ul>
</body>
</html>