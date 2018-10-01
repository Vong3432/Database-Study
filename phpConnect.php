<!DOCTYPE html>
<html>
<head>
	<title>Database OOP </title>
</head>
<body>
<?php

// the databse "demo" is added in constructor after successfully create the database itself
$mysqli = new mysqli("localhost","root","","demo");


//Check connection
if ($mysqli === false) {
	die("Error:Could not connect." .$mysqli->connect_error);
}

/* 

*******************
Create a databse
*******************

$sql = "CREATE DATABASE demo";
if ($mysqli->query($sql) === true) {
	echo "Databse created successfully";
}

else{
	echo "ERROR: Could not able to execute $sql." .$mysqli->error;
}

*******************
Close Connection
*******************
mysqli_close($link);

*/

$sql = "CREATE TABLE persons(
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		first_name VARCHAR(30) NOT NULL,
		last_name VARCHAR(30) NOT NULL,
		email VARCHAR(70) NOT NULL UNIQUE
	   )";

	   if($mysqli->query($sql) === true)
	   {
	   		echo "Table created successfully.";
	   }
	   else
	   {
	   		echo "ERROR:Could not able to execute $sql." .$mysqli->error;
	   }

?>
</body>
</html>