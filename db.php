<?php
// mysqli
$servername = "localhost";
$username = "root";
$password = "EnpolikeTech12";
$dbname = "test";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO categories (id, name, description, position) VALUES ( '4' , 'stanley', 'CEO', '3' )";
	if ($con->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $con->error;
	}


//$result = $con->query("SELECT name AS _message FROM categories");
//$row = $result->fetch_assoc();
//echo htmlentities($row['_message']);
$q = "SELECT name, description FROM categories ORDER by ID DESC";

if ($result = $con->query($q)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $row["name"], $row["description"]);
    }
	  // Return the number of rows in result set
	$rowcount=mysqli_num_rows($result);
	printf("Result set has %d rows.\n",$rowcount);

	/* free result set */
    $result->free();
}

$con->close();
?>