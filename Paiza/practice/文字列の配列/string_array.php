<?php
//文字列を読み取り、配列へと格納
$input_line = trim(fgets(STDIN));
$inputs = explode(" ", $input_line);
//誤作動が起きないように、型をintで統一
$inputs = array_map('intval', $inputs);
$targetPositionX = $inputs[3];
$targetPositionY = $inputs[2];

//出力するマス目がいるところまでfor文を回す
$targetValue = "";
for ($i = 1; $i <= $targetPositionY; $i++) {
	$input_line = trim(fgets(STDIN));
	//縦のマス目が一致するかどうかチェック
	if ($targetPositionY == $i) {
		$inputs = str_split($input_line, 1);
		//出力する横のマス目を変数に代入
		$targetValue = $inputs[$targetPositionX - 1];
	}
}
//結果出力（"Yes" or "No"）
if ($targetValue === "#") {
	echo "Yes\n";
}else {
	echo "No\n";
}
