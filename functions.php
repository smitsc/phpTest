<?php

function minDiscCirc($xPos, $yPos) {
	return sprintf("The minimum distance to the circle is %.2f </br>", sqrt(($xPos*$xPos)+($yPos*$yPos))-1);
}

function majorityGate($a,$b,$c,$d){
	return ($a?1:0)+($b?1:0)+($c?1:0)+($d?1:0)>2?"Mostly True":"Likely it's False";
}

function frenchWeeks($x) {
	$y = (integer) (($x*7)/10);
	$z = ($x*7)%10;
	return sprintf("%s French weeks   - %s French Days   - 0 French Fries", $y, $z);
}

function firstDuplicate($array){
	$array2 = array_slice($array, 1);
	foreach($array as $key => $value){
		$foundKey = array_search($value, $array2);
		if ($foundKey) {
			return "found dupe " . $value . " at index = " . $key;
			break;
		}
		$array2 = array_slice($array2, 1);
	}
	return "found no dupes -1";
}
?>
