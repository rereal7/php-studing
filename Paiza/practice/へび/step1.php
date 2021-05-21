<?php

//行・列・現在地座標・移動する方角の取得
$input = explode(" ", trim(fgets(STDIN)));
$line = $input[0];
$column = $input[1];
$x = $input[3];
$y = $input[2];
$direction = $input[4];

//マップの取得
$maps = [];
for($i = 0; $i < $line; $i++){
	$input = str_split(trim(fgets(STDIN)), 1);
	$maps[] = $input;
}

// var_dump($maps);

//結果出力（進行方向へ１マス進めるかどうか）
if($direction === "N"){
	//北
	if ($maps[$y - 1][$x] === "#" || empty($maps[$y - 1][$x])){
		echo "No";
	}else{
		echo "Yes";
	}
}
elseif($direction === "S"){
	//南
	if ($maps[$y + 1][$x] === "#" || empty($maps[$y + 1][$x])){
		echo "No";
	}else{
		echo "Yes";
	}
}
elseif($direction === "E"){
	//東
	if ($maps[$y][$x + 1] === "#" || empty($maps[$y][$x + 1])){
		echo "No";
	}else{
		echo "Yes";
	}
}
elseif($direction === "W"){
	//西
	if ($maps[$y][$x - 1] === "#" || empty($maps[$y][$x -1])){
		echo "No";
	}else{
		echo "Yes";
	}
}