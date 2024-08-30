<?php
// 項目
$title = array( '商品','価格','税込価格');

// 税率
define('TAX',0.1);

// 商品価格
$price =[100,200,300];

// 商品名
$goods =array('鉛筆', '消しゴム', '定規');


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="task.css">
  <title>PHP練習</title>
</head>
<body>
  <table border="1" style="border-collapse: collapse">
    <tr>
      <th><?=$title[0];?></th><th><?=$title[1];?></th><th><?=$title[2];?></th>
    </tr>
    <tr>
    <td><?=$goods[0];?></td><td><?=$price[0];?></td><td><?=$price[0]*(1+TAX);?></td>
    </tr>
    <tr>
    <td><?=$goods[1];?></td><td><?=$price[1];?></td><td><?=$price[1]*(1+TAX);?></td>
    </tr>
    <tr>
    <td><?=$goods[2];?></td><td><?=$price[2];?></td><td><?=$price[2]*(1+TAX);?></td>
    </tr>
  </table>

 


    
</body>
</html>