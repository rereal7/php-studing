<?php
//店で売られている商品の数と、自分が買いたい商品の数の取得
$input_line = trim(fgets(STDIN));
$inputs = explode(" ", $input_line);
$soldCount = $inputs[0];
$buyCount = $inputs[1];

//店で売られている商品名とその値段を配列へ格納
$soldNames = [];
$soldPrices = [];
for ($i = 0; $i < $soldCount; $i++) {
	$input_line = trim(fgets(STDIN));
	$inputs = explode(" ", $input_line);
	$soldNames[] = $inputs[0];
	$soldPrices[] = $inputs[1];
}

//自分が買いたい商品が売られているか確認し、売られていれば値段を出力する
for ($i = 0; $i < $buyCount; $i++) {
	$buyName = trim(fgets(STDIN));
	$result = "";
	for ($j = 0; $j < $soldCount; $j++) {
		if ($buyName === $soldNames[$j]) {
			$result = $soldPrices[$j];
			break;
		}
	}
	if ($result !== "") {
		echo $result . "\n";
	}elseif ($result === "") {
		echo "-1\n";
	}
}