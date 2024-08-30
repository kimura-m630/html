<?php
// 項目
$title = array( '商品','価格','税込価格','1Dzの価格');

// 税率
define('TAX',0.1);
// 1Dz
define('Dz',12);

// 商品価格
$price =[100,200];

// 商品名
$goods =array('鉛筆', '消しゴム');


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
      <th><?=$title[0];?></th><th><?=$title[1];?></th><th><?=$title[2];?><th><?=$title[3];?></th>
    </tr>
    <tr>
    <td><?=$goods[0];?></td><td><?=$price[0];?>円</td><td><?=$price[0]*(1+TAX);?>円</td><td><?=$price[0]*(1+TAX)*Dz;?>円</td>
    </tr>
    <tr>
    <td><?=$goods[1];?></td><td><?=$price[1];?>円</td><td><?=$price[1]*(1+TAX);?>円</td><td><?=$price[1]*(1+TAX)*Dz;?>円</td>
    </tr>
  </table>

  <p>消費税は<?=TAX*100;?>％です。</p>

 


    
</body>
</html>