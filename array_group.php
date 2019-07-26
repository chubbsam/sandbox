<?php

/**
 * Function that groups an array of associative arrays by some key.
 * 
 * @param {String} $key Property to sort by.
 * @param {Array} $data Array that stores multiple associative arrays.
 */
function group_by($key, $data) {
    $result = array();

    foreach($data as $val) {
        if(array_key_exists($key, $val)){
            $result[$val[$key]][] = $val;
        }else{
            $result[""][] = $val;
        }
    }

    return $result;
}



$data = array(
    array(
        "id" => 1,
        "name" => "Bruce Wayne",
        "city" => "Gotham",
        "gender" => "Male"
    ),
    array(
        "id" => 2,
        "name" => "Thomas Wayne",
        "city" => "Gotham",
        "gender" => "Male"
    ),
    array(
        "id" => 3,
        "name" => "Diana Prince",
        "city" => "New Mexico",
        "gender" => "Female"
    ),
    array(
        "id" => 4,
        "name" => "Speedy Gonzales",
        "city" => "New Mexico",
        "gender" => "Male"
    )
);


// Group data by the "gender" key 
$byGroup1 = group_by("gender", $data);

// Dump result
echo "<pre>" . var_export($byGroup1, true) . "</pre>";


// Group data by the "city" key 
$byGroup2 = group_by("city", $data);

// Dump result
echo "<pre>" . var_export($byGroup2, true) . "</pre>";

echo "sort(data)";
print_r($data);

//sort will change keys of the array because the sequence is changed.
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_r($cars);
?>