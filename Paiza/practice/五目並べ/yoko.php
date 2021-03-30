<?php

$winLose = "D";

for ($i = 0; $i < 5; $i++) {
	$input_line = trim(fgets(STDIN));
	$winO = mb_substr_count($input_line, "O");
	$winX = mb_substr_count($input_line, "X");
	
	if ($winO == 5) {
		$winLose = "O";
		echo $winLose;
		break;
	}elseif ($winX == 5) {
		$winLose = "X";
		echo $winLose;
		break;
	}
}
if ($winLose == "D") {
	echo $winLose;
}