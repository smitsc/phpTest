<?php

function minDiscCirc($xPos, $yPos) {
	return 'This function will require some research!<br/>Is the given point (' . $xPos . ',' . $yPos .') inside or outside the circle?';
}

function majorityGate($a,$b,$c,$d){
	return ($a?1:0)+($b?1:0)+($c?1:0)+($d?1:0)>2?"Mostly True":"Likely it's False";
}

function frenchWeeks($x) {
	$y = (integer) (($x*7)/10);
	$z = ($x*7)%10;
	return $y . " French weeks   - " . $z . " French Days   - 0 French Fries";
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
