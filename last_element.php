<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
echo end($people);


$array = array(
    'first' => 123,
    'second' => 456,
    'last' => 789, 
);

end($array);         // move the internal pointer to the end of the array
$key = key($array);  // fetches the key of the element pointed to by the internal pointer

echo $key;

//var_dump($key);

?>
