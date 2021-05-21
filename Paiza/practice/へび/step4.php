<?php

//行・列・現在地座標・方角・左右の向きの取得
$firstInput = explode(" ", trim(fgets(STDIN)));
$line = $firstInput[0];
$x = $firstInput[3];
$y = $firstInput[2];

//マップの取得
$maps = [];
for($i = 0; $i < $line; $i++){
	$inputForMap = str_split(trim(fgets(STDIN)), 1);
	$maps[] = $inputForMap;
}

// var_dump($maps);

//結果出力（進行方向へ１マス進めるかどうか）
$direction = "N";
$number = $firstInput[4];

for($i = 0; $i < $number; $i++){
	//実際に進む方向の確定
	$inputs = explode(" ", trim(fgets(STDIN)));
	$leftRight = $inputs[0];
	$repeat = $inputs[1];
	$direction= direction($direction, $leftRight, $repeat);

	//結果出力（移動先の座標、１マス先へ進めない場合、"Stop"を出力）
	$output = moveOrStop($firstInput, $x, $y, $maps, $repeat, $direction);
	$x = $output['x'];
	$y = $output['y'];

	echo $output['y'] . " " . $output['x'] . "\n";
	if($output['stop'] === "Stop"){
		echo $output['stop'];
		break;
	}
}


function direction($direction, $leftRight, $repeat):string
{
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
	return $direction;
}

function moveOrStop($firstInput, $x, $y, $maps, $repeat, $direction):array
{
  $stop = "";
	$line = $firstInput[0];
	$column = $firstInput[1];
	
	for($j = 0; $j < $repeat; $j++){
		if($direction === "N"){
			//北
			$y = $y - 1;
			if($y < 0 || $maps[$y][$x] !== "."){
				$stop = "Stop";
				$y = $y + 1;
				break;
			}
		}elseif($direction === "S"){
			//南
			$y = $y + 1;
			if($y > $column || $maps[$y][$x] !== "."){
				$stop = "Stop";
				$y = $y - 1;
				break;
			}
		}elseif($direction === "E"){
			//東
			$x = $x + 1;
			if($x > $line || $maps[$y][$x] !== "."){
				$stop = "Stop";
				$x = $x - 1;
				break;
			}
		}elseif($direction === "W"){
			//西
			$x = $x - 1;
			if($x < 0 || $maps[$y][$x] !== "."){
				$stop = "Stop";
				$x = $x + 1;
				break;
			}
		}
	}
	
	return array(
		'x' => $x,
		'y' => $y,
		'stop' => $stop
	); 
}