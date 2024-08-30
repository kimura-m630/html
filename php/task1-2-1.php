<?php 
   // 消費税率を設定　定数にする
   define ('TAX',10);

   // 商品の価格を設定
   $pencilPrice = 100;
   $eraserPrice = 200;
   
   // 税込価格
   $pencilPriceTax = 110;
   $eraserPriceTax = 220;
   
   // 商品名
   $goods1 = "鉛筆";
   $goods2 = "消しゴム";
   ?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <p>現在の消費税率は<?=TAX;?>%です。</p>
  <p><?=$goods1?>が<?=$pencilPrice;?>円で税込<?=$pencilPriceTax;?>円です。</p>
  <p><?=$goods2?>が<?=$eraserPrice;?>円で税込<?=$eraserPriceTax;?>円です。</p>
</body>
</html>