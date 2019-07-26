<?php
// Arrays to compare
// Set some properties for each object
$array1[0][0] = 11; $array1[0][1] = 3;
$array1[1][0] = 7;  $array1[1][1] = 1;
$array1[2][0] = 2;  $array1[2][1] = 5;
$array1[3][0] = 5;  $array1[3][1] = 7;

$array2[0][0] = 7;  $array2[0][1] = 5;
$array2[1][0] = 5;  $array2[1][1] = 7;

Class cpr {
	function CompareByElement($a, $b, $x=0) {
		$a1 = $a[$x];
		$b1 = $b[$x];
    
		if ($a1 == $b1) {
			if ($x==0) {
				$this->CompareByElement($a, $b, 1);
			} else {
				return 0;
			}	
		} else {
			return 1;
		}
	}

	function useCompareByElement($a, $b) {
		return	array_udiff($a, $b, array($this, 'CompareByElement'));
	}
}
$mp = new cpr;
print_r($mp->useCompareByElement($array1, $array2));
?>

A method of an instantiated object is passed as an array containing an object at index 0 and the method name at index 1.

// Functions
$diff = array_udiff($array1, $array2, 'compareObjects');

// Object methods 
$diff = array_udiff($array1, $array2, array($this, 'compareObjects'));
// -OR-
$diff = array_udiff($array1, $array2, array($my_obj, 'compareObjects'));


// Static class methods
$diff = array_udiff($array1, $array2, 'some_class::compareObjects'); // PHP 5.2.3+
