<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "poc";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sermonDate = $_POST['sermonDate'];
$title = $_POST['title'];
$speaker = $_POST['speaker'];
$verse = $_POST['verse'];
$vimeoLink = $_POST['vimeoLink'];
$thumbnailLink = $_POST['thumbnailLink'];

$createDate = date("Y-m-d H:i:s");

$sql = "INSERT INTO sermons (sermonDate, createDate, title, speaker, verse, vimeoLink, thumbnailLink) VALUES ('$sermonDate', '$createDate', '$title', '$speaker', '$verse', '$vimeoLink', '$thumbnailLink')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>