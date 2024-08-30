<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="task.css">
  <title>Document</title>
</head>
<body>
<table border="1" style="border-collapse: collapse">
        <tr>
            <th>商品</th>
            <th>価格</th>
            <th>税込価格</th>
        </tr>
        <?php
        // 連想配列を定義
        $goods = [
            "鉛筆" => 100,
            "消しゴム" => 200,
            "定規" => 300,
        ];

        // 消費税率を設定　定数にする
        define ('TAX',0.1);
        
        // foreach文を使って連想配列の要素を表示
        foreach ($goods as $key => $value) {
            echo "<tr>
            <td>" . $key . "</td>
            <td>" . $value ."円"."</td>
            <td>" . $value*(1+TAX) ."円"."</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>