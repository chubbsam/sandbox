<?php
$str = '{
  "people":[
    {
      "id": "1",
      "content": "man1"
    },
    { 
      "id": "2",
      "content": "man2"
    }
  ]
}';

$json = json_decode($str);

foreach($json->people as $item)
{
    if($item->id == "1")
    {
        echo $item->content;
    }
}


class man {
    public $name = "Paul";
	public $age = 12;
	public $city = "Kaoshing";
}   

$myObj= new man();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "[New York, Taipei, Changhua]";

$myJSON = json_encode($myObj);

echo $myJSON;


?>