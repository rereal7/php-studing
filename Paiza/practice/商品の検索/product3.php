<?php

//ランダムな値文字列を出力する回数の取得
$input_number = trim(fgets(STDIN));

//与えられている文字列をそれぞれ配列の中へ格納
$inputs = [];
for ($i = 0; $i < $input_number; $i++) {
	$input_line = trim(fgets(STDIN));
	$inputs[] = $input_line;
}

//結果出力（配列の重複するものをカウントし、並び替え後出力）
$results = array_count_values($inputs);
ksort($results);
foreach ($results as $targetString => $targetCount) {
	echo $targetString . " " . $targetCount . "\n";
}