<?php

//行・列・座標の数取得
$input = explode(" ", trim(fgets(STDIN)));
$line = $input[0];
// $column = $input[1];
$number = $input[2];

//マップの取得
$maps = [];
for($i = 0; $i < $line; $i++){
	$input = str_split(trim(fgets(STDIN)), 1);
	$maps[] = $input;
}

// var_dump($maps[0]);

//出力座標の取得
for($i = 0; $i < $number; $i++){
	$input = explode(" ", trim(fgets(STDIN)));
	array_splice($maps[$input[0]], $input[1], 1, "#");
}

// var_dump($maps);

//結果出力（置き換え後のマップ出力）
foreach($maps as $map){
	echo implode($map) . "\n";
}