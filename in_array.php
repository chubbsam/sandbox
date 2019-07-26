<?php
// Arrays to compare
// Set some properties for each object
$array1[0][0] = 11; $array1[0][1] = 3;
$array1[1][0] = 7;  $array1[1][1] = 1;
$array1[2][0] = 2;  $array1[2][1] = 5;
$array1[3][0] = 5;  $array1[3][1] = 7;

$array2[0][0] = 7;  $array2[0][1] = 5;
$array2[1][0] = 5;  $array2[1][1] = 7;

	$element1_array = array();
	foreach ($array1 as $array1_item) {
		print_r($array1_item[1]);
		array_push($element1_array, $array1_item[1]);
	}
	
	if (in_array($array2[1][0], $element1_array)) {
		echo "yes";
	} else {
		echo "no";
	}	

?>

