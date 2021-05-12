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
$results = [];
for($i = 0; $i < $number; $i++){
	$input = explode(" ", trim(fgets(STDIN)));
	$results[] = $maps[$input[0]][$input[1]];
}

// var_dump($result);

//結果出力（指定座標の出力）
foreach($results as $result){
	echo $result . "\n";
}