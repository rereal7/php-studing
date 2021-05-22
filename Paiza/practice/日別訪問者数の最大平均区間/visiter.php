<?php

//全体の日数とキャンペーン期間
$inputs = array_map('intval', explode(" ", trim(fgets(STDIN))));
$allDay = intval($inputs[0]);
$campaignTerm = intval($inputs[1]);

//最大平均訪問区間
$candidacyDay = 1;
$firstCampaignDay = 1;
$campaignDays = array_map('intval', explode(" ", trim(fgets(STDIN))));
$targetTerms = array_slice($campaignDays, 0, $campaignTerm);
$visitor =  array_sum($targetTerms);
$maxVisitor =  $visitor;

$pattern = $allDay - $campaignTerm + 1;
for($i = 1; $i < $pattern; $i++){
	//指定期間の合計訪問人数を計算
	$visitor = $visitor - $campaignDays[$i - 1] + $campaignDays[$i + $campaignTerm - 1];
	
	// $visitor = 0;
	// for($j = 0; $j < $campaignTerm; $j++){
	// 		$visitor = $visitor + $campaignDays[$i + $j];
	// 	}
	// $averageVisitor = $visitor / $campaignDay;
// 	echo $averageVisitor . "\n";

	if($visitor > $maxVisitor){
		$maxVisitor = $visitor;
		$firstCampaignDay = $i + 1;
		$candidacyDay = 1;
	}elseif($visitor == $maxVisitor){
		$candidacyDay++;
	}
}

//結果
echo $candidacyDay . " " . $firstCampaignDay;