<?php

//ランダムな値を出力する回数の取得
$input_number = trim(fgets(STDIN));

//値の出現回数のカウントをfor文で実行するための配列を用意
$input_line = trim(fgets(STDIN));
$inputs = str_split($input_line, 1);
$alphabetMatch = range('a', 'z');
$alphabetNumber = count($alphabetMatch);
$alphabetCount = str_split(str_repeat('0', $alphabetNumber), 1);
//$inputsに格納されている各値が$alphabetMatchと一致している場合、$alphabetCountの各値を＋１ずつ上書き
for ($i = 0; $i < $input_number; $i++) {
	for ($j = 0; $j < $alphabetNumber; $j++) {
		if ($inputs[$i] === $alphabetMatch[$j]) {
			$alphabetCount[$j] = $alphabetCount[$j] + 1;
			break;
		}
	}
}

//結果出力（文字列に変換後）
$output_line = implode(" ", $alphabetCount);
echo $output_line;