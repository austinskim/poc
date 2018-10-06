<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "poc";

//connect to mysqli database (Host/Username/Password)
$connection = mysqli_connect($servername, $username, $password) or die("Error " . mysqli_error());

//select MySQLi dabatase table
$db = mysqli_select_db($connection, $dbname) or die("Error " . mysqli_error());

$sql = "SELECT vimeoLink FROM poc.sermons ORDER BY createDate DESC LIMIT 5"
$query = mysqli_query($connection, $sql);

$array = array();

// look through query
while($row = mysqli_fetch_array($query)){

	// add each row returned into an array
	$array[] = $row;

	// OR just echo the data:
	echo $row['createDate']; // etc

}

// debug:
// print_r($array); // show all array data
// echo $array[0]['username']; // print the first rows username

mysqli_close();
?>