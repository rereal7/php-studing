<?php

//与えられる比較元の値の数と、比較する値の数の取得
$input_line = trim(fgets(STDIN));
$inputs = explode(" ", $input_line);
$originCount = $inputs[0];
$comparedCount = $inputs[1];

//比較元の文字列をそれぞれ配列へ格納
$originNames = [];
for ($i = 0; $i < $originCount; $i++) {
	$input_line = trim(fgets(STDIN));
	$originNames[] = $input_line;
}

//比較元の文字列といつ一致するか確認し、一致した場合そのインデックスを出力する
for ($i = 0; $i < $comparedCount; $i++) {
	$comparedName = trim(fgets(STDIN));
	$result = 0;
	for ($j = 0; $j < $originCount; $j++) {
		if ($comparedName === $originNames[$j]) {
			$result = array_keys($originNames, $originNames[$j]);
			$result = $result[0] + 1;
			break;
		}
	}
	//結果出力
	if ($result !== 0) {
		echo $result . "\n";
	}elseif ($result === 0) {
		echo "-1\n";
	}
}