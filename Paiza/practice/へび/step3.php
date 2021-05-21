<?php

//行・列・現在地座標・方角・左右の向きの取得
$input = explode(" ", trim(fgets(STDIN)));
$line = $input[0];
// $column = $input[1];
$x = $input[3];
$y = $input[2];
$number = $input[4];
$direction = "N";

//マップの取得
$maps = [];
for($i = 0; $i < $line; $i++){
	$input = str_split(trim(fgets(STDIN)), 1);
	$maps[] = $input;
}

// var_dump($maps);

//結果出力（進行方向へ１マス進めるかどうか）
for($i = 0; $i < $number; $i++){
	//実際に進む方向の確定
	$leftRight = trim(fgets(STDIN));
	if($direction === "N"){
		//北→西or北→東
		if($leftRight === "L"){
			$direction = "W";
		}else{
			$direction = "E";
		}
	}
	elseif($direction === "S"){
		//南→東or南→西
		if($leftRight === "L"){
			$direction = "E";
		}else{
			$direction = "W";
		}
	}
	elseif($direction === "E"){
		//東→北or東→南
		if($leftRight === "L"){
			$direction = "N";
		}else{
			$direction = "S";
		}
	}
	elseif($direction === "W"){
		//西→南or東→北
		if($leftRight === "L"){
			$direction = "S";
		}else{
			$direction = "N";
		}
	}

	//進める場合は１マス先の座標、そうでなければ"Stop"
	if($direction === "N"){
		//北
		if ($maps[$y - 1][$x] === "." && !empty($maps[$y - 1][$x])){
			echo strval($y - 1) . " " . "$x" . "\n";
			$y = $y - 1;
		}else{
			echo "Stop";
			break;
		}
	}elseif($direction === "S"){
		//南
		if ($maps[$y + 1][$x] === "." && !empty($maps[$y + 1][$x])){
			echo strval($y + 1) . " " . "$x" . "\n";
			$y = $y + 1;
		}else{
			echo "Stop";
			break;
		}
	}elseif($direction === "E"){
		//東
		if ($maps[$y][$x + 1] === "." && !empty($maps[$y][$x + 1])){
			echo "$y" . " " . strval($x + 1) . "\n";
			$x = $x + 1;
		}else{
			echo "Stop";
			break;
		}
	}elseif($direction === "W"){
		//西
		if ($maps[$y][$x - 1] === "." && !empty($maps[$y][$x -1])){
			echo "$y" . " " . strval($x - 1) . "\n";
			$x = $x - 1;
		}else{
			echo "Stop";
			break;
		}
	}
}