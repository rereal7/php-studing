<?php
$menu = array('name' => 'CURRY', 'price' => 900);
echo '$menuの値: ';
// var_exportは変数の中身を見るための関数です
var_export($menu);
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
//foreach ($menu as $name => $price) {
//	echo $name . "は" . $price . "円です";
//}
echo $menu["name"] . "は" . $menu["price"] . "円です";
?>