<?php
//要素数と試行回数の取得
$input_line = trim(fgets(STDIN));
$inputs = explode(" ", $input_line);
$inputs = array_map('intval', $inputs);
$objectCount = $inputs[0];
$numberOfTrial = $inputs[1];

//各要素の値の取得
$input_number = trim(fgets(STDIN));
$inputs = explode(" ", $input_number);
$factors = array_map('intval', $inputs);

//各要素に対しての操作内容の読み取りと各種操作の実行
for ($i = 0; $i < $numberOfTrial; $i++) {
	$input_line = trim(fgets(STDIN));
	$leadNumber = mb_substr($input_line, 0, 1);
	
	//読み取った文字列の先頭が"0"だった場合のみ、２つ目の値を読み取る
	if ($leadNumber == 0) {
		// 0: push_back
		$factors[] = mb_substr($input_line, 2, 2);
	}elseif ($leadNumber == 1) {
		// 1: pop_back
		array_pop($factors);
	}else {
		// 2: print
        $outputs = implode(" ", $factors);
		echo $outputs . "\n";
	}
}