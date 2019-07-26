<?php


if (isset($_POST['content'])) 
{ 
	$content = $_POST['content']; //array $content
} else {
	$content = null;
}
if (isset($_GET['delete'])) 
{ 
	$delete = $_GET['delete']; //
	$content[$delete] = null;
}

if (isset($_GET['up'])) 
{ 
	$up = $_GET['up']; //
	$thisup = $up - 1;
	$temp = $content[$thisup];
	$content[$thisup] = $content[$up];
	$content[$up] = $temp;
}

if (isset($_GET['down'])) 
{ 
	$down = $_GET['down']; //
	$thisdown = $down + 1;
	$temp = $content[$thisdown];
	$content[$thisdown] = $content[$down];
	$content[$down] = $temp;
}

echo '<html><form action="" method="post">';
if ($content != null) {  //rearrange array
	$re_content = array();
	foreach ($content as $obj) {
		if ( isset($obj) && $obj != null ) {
			array_push($re_content, $obj);
		}	
	}

	for($i = 0; $i < count($re_content); ++$i) {  // $i is required, thus foreach is not used.
		echo $i.'<input type="text" name="content[]" value="'.$re_content[$i].'"/><input type="submit" formaction="?delete='.$i.'" value="delete">';
		if ( $i != 0 	) {  //not the first 
			echo '<input type="submit" formaction="?up='.$i.'" value="up">';
		}
		if ( $i != count($re_content)-1 ) {  //not the last
			echo '<input type="submit" formaction="?down='.$i.'" value="down">';
		}		
		echo '<br>';
	}
	
}
echo '<input type="text" name="content[]" value=""/><br>';
echo '<input type="submit" name="submit" value="submit" formaction="?"/></form></html>';

if (isset($_POST['content'])) {
	print_r($re_content);
}


?>