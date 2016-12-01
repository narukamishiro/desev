<?php
$year="";
if (!empty($_REQUEST['ye'])){
	$year=$_REQUEST['ye'];
}
$month="";
if (!empty($_REQUEST['mes'])){
	$year=$_REQUEST['mes'];
}
function countdown($year, $month){
	global $return;
	global $countdown_date;
	$countdown_date = mktime('00', '00', '00', $month, '1', $year);
	$today = time();
	$diff = $countdown_date - $today;
	if ($diff < 0){
		$diff = 0;
		$dl = floor($diff/60/60/24);
		$hl = floor(($diff - $dl*60*60*24)/60/60);
		$ml = floor(($diff - $dl*60*60*24 - $hl*60*60)/60);
		$sl = floor(($diff - $dl*60*60*24 - $hl*60*60 - $ml*60));
	}
	echo "Today's date ".date("F j, Y, g:i:s A")."<br/>";
	echo "Countdown date ".date("F j, Y, g:i:s A",$countdown_date)."<br/>";
	echo "\n<br>";
	$return = array($dl, $hl, $ml, $sl);
	return $return;
}
countdown($year, $month, $day, $hour, $minute, $second);
list($dl,$hl,$ml,$sl) = $return;
echo "Countdown ".$dl." days ".$hl." hours ".$ml." minutes ".$sl." seconds left"."\n<br>";
?>