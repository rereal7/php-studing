<?php

//与えられる人数の値を取得
$personCount = trim(fgets(STDIN));

// 各情報の読み込み
// for文でぶん回して、構造体に格納する
$users = [];
for ($i = 0;$i < $personCount ; $i++) {
	$input_line = trim(fgets(STDIN));
	$inputs = explode(" ", $input_line);
	
	$users[] = array("nickname" => $inputs[0], "old" => $inputs[1], "birth" => $inputs[2], "state" => $inputs[3]);
}

// 各情報の書き出し
// 構造体にあるデータを一気に表示する
for ($i = 0;$i < $personCount ; $i++) {
	echo "User{\n";
	echo "nickname : " . $users[$i]['nickname'] . "\n";
	echo "old : " . $users[$i]['old'] . "\n";
	echo "birth : " . $users[$i]['birth'] . "\n";
	echo "state : " . $users[$i]['state'] . "\n";
	echo "}\n";
}