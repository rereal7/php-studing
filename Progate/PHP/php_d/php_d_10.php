<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
$totalPrice = 0;
foreach ($menus as $menu) {
	$totalPrice += $menu['price'];
	echo $menu['name'] . "は" . $menu['price']. "円です" . "<br>";
}

echo "合計金額は" . $totalPrice . "円です";
?>