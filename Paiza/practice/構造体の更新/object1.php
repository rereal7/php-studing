<?php

//与えられる人数の値を取得
$personCount = trim(fgets(STDIN));

//各情報の出力
for ($i = 0; $i < $personCount; $i++) {
	$input_line = trim(fgets(STDIN));
	$inputs = explode(" ", $input_line);
	$name = $inputs[0];
	$old = $inputs[1];
	$birth = $inputs[2];
	$state = $inputs[3];
	echo "User{\n";
	echo "nickname : " . $name . "\n";
	echo "old : " . $old . "\n";
	echo "birth : " . $birth . "\n";
	echo "state : " . $state . "\n";
	echo "}\n";
}