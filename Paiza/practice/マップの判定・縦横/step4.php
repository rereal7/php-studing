<?php

//行・列・座標の数取得
$input = explode(" ", trim(fgets(STDIN)));
$line = $input[0];
$column = $input[1];
// $number = $input[2];

//マップの取得
$maps = [];
for($i = 0; $i < $line; $i++){
	$input = str_split(trim(fgets(STDIN)), 1);
	$maps[] = $input;
}

// var_dump($maps[0]);

$result = [];
for ($i = 0; $i < $line; $i++){
	for($j = 0; $j < $column; $j++){
		$counter = 0;
		//上
		if ($maps[$i - 1][$j] === "#" || empty($maps[$i - 1][$j])){
			$counter++;
		}
		//下
		if ($maps[$i + 1][$j] === "#" || empty($maps[$i + 1][$j])){
			$counter++;
		}
		if($counter == 2){
			$results[] = "$i" . " " . "$j";
		}
	}
}

foreach($results as $result){
	echo $result . "\n";
}