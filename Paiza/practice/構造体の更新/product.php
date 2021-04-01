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
//出力する年齢の取得
$userAge = trim(fgets(STDIN));

//該当年齢のUserNameを出力
for ($i = 0; $i < $personCount; $i++) {
	if ($userAge == $users[$i]['old']) {
		echo $users[$i]['nickname'];
	}
}
