<?php

//ランダムな値を出力する回数の取得
$input_number = trim(fgets(STDIN));

//値の出現回数のカウントをfor文で実行するための配列を用意
$input_line = trim(fgets(STDIN));
$inputs = explode(" ", $input_line);
$inputs = array_map('intval', $inputs);
$numberMatch = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$numberCount = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
//$inputsに格納されている各値が$numberMatchと一致している場合、$numberCountの各値を＋１ずつ上書き
for ($i = 0; $i < $input_number; $i++) {
	for ($j = 0; $j < 10; $j++) {
		if ($inputs[$i] == $numberMatch[$j]) {
			$numberCount[$j] = $numberCount[$j] + 1;
			break;
		}
	}
}

//結果出力（文字列に変換後）
$output_line = implode(" ", $numberCount);
echo $output_line;