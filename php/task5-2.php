<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<ul>
    <?php
    // 曜日の配列を定義
    $week = ["日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日"];
    
    $i = 0;
    
    // 配列の長さを取得
    $length = count($week);
    
    // while文を使って配列の要素を箇条書きで表示
    while ($i < $length) {
        echo "<li>" . $week[$i] . "</li>";
        $i++;
    }
    ?>
    </ul>
<body>
</body>
</html>