<?php

$winLose = "D";

for ($i = 0; $i < 5; $i++) {
	$input_line = trim(fgets(STDIN));
	$sentence = $sentence + $input_line;
}
if ($winLose == "D") {
	echo $winLose;
}


//斜めで使えそう
$sentence = "";
for ($i = 0; $i < 5; $i++) {
	$input_line = trim(fgets(STDIN));
	$word = substr($input_line, $i);
	$sentence = $sentence + $word;
}



function winLose() {
	$winO = mb_substr_count($sentence, "O");
	$winX = mb_substr_count($sentence, "X");
	
	if ($winO == 5) {
		$winLose = "O";
	}elseif ($winX == 5) {
		$winLose = "X";
	}
}

$sentence = "";
for ($i = 0; $i < 5; $i++) {
	$input_line = trim(fgets(STDIN));
	$word = mb_substr($input_line, 1, 1);
	$sentence = $sentence . $word;
}
winLose();

$sentence = "";
for ($i = 0; $i < 5; $i++) {
	$input_line = trim(fgets(STDIN));
	$word = mb_substr($input_line, 2, 1);
	$sentence = $sentence . $word;
}
winLose();

$sentence = "";
for ($i = 0; $i < 5; $i++) {
	$input_line = trim(fgets(STDIN));
	$word = mb_substr($input_line, 3, 1);
	$sentence = $sentence . $word;
}
winLose();

$sentence = "";
for ($i = 0; $i < 5; $i++) {
	$input_line = trim(fgets(STDIN));
	$word = mb_substr($input_line, 4, 1);
	$sentence = $sentence . $word;
}
winLose();

$sentence = "";
for ($i = 0; $i < 5; $i++) {
	$input_line = trim(fgets(STDIN));
	$word = mb_substr($input_line, 5, 1);
	$sentence = $sentence . $word;
}
winLose();



$winLose = "D";

for($i = 0; $i < 5; $i++){
    $sentence = "";
    for ($k = 0; $k < 5; $k++) {
    	$input_line = trim(fgets(STDIN));
    	$word = mb_substr($input_line, $i, 1);
    	$sentence = $sentence . $word;
    }
    $winO = mb_substr_count($sentence, "O");
    $winX = mb_substr_count($sentence, "X");
    
    if ($winO == 5) {
    	$winLose = "O";
    }elseif ($winX == 5) {
    	$winLose = "X";
    }
    echo $sentence;
}
echo $winLose;

//通ったやつ

$winLose = "D";
$sentence = "";

for($i = 0; $i < 5; $i++){
	$input_line = trim(fgets(STDIN));
	$sentence = $sentence . $input_line;
}

$lines = str_split($sentence, 5);

foreach ($lines as $line) {
	$winO = mb_substr_count($line, "O");
  $winX = mb_substr_count($line, "X");
	if ($winO == 5) {
		$winLose = "O";
	}elseif ($winX == 5) {
		$winLose = "X";
	}
}
echo $winLose;

