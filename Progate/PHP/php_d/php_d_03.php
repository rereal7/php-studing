<?php
$price = 1000;
$taxRate = 0.08;
echo '変数$priceの値: '.$price;
echo '<br>';
echo '変数$taxRateの値: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
echo "税込価格は" . $price = $price + $price * $taxRate . "円です";
// echo $price += $price * $taxRate; 　これだとエラーが出る…謎
// echo $price = $price + $price * $taxRate; 
?>
