<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
$totalPrice = 0;
//$maxPrice = 0;
//$maxMenu = '';
$maxMenuNumber = 0;
foreach ($menus as $menu) {
	$totalPrice += $menu['price'];
	echo $menu['name'] . "は" . $menu['price']. "円です" . "<br>";
}

for ($i = 0; $i < count($menus); $i++) {
	//if ($maxPrice < $menus[$i]['price']) {
		//$maxPrice = $menus[$i]['price'];
		//$maxMenu = $menus[$i]['name'];
	if ($menus[$maxMenuNumber]['price'] < $menus[$i]['price']) {
		$maxMenuNumber  = $i;
	}
	//}
}

echo "合計金額は" . $totalPrice . "円です" . "<br>";
//echo  $maxMenu . "が最高で" . $maxPrice . "円です";
echo $menus[$maxMenuNumber]['name'] . "が最高価格で" . $menus[$maxMenuNumber]['price'] ."円です";
?>