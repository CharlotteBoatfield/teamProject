<?php
$conn = new PDO("mysql:host=localhost;dbname=teamDatabase", 'root', 'root');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$_SESSION['catid'] = isset($_POST['catid']) ? $_POST['catid'] : "";

function listCategory () {   
if($_GET['showid'] == 'listCategory') {
	$sql = "SELECT gameName FROM gameCategory";
}
}

function showPosts () {
if($_GET['showid'] == 'showPosts') {
	$sql = "SELECT * FROM post WHERE gameCategoryID = \"\"";
}
}

function getCategories () {
	global $conn;
	$stmt = $conn->query("SELECT gameName, gameGenre FROM gameCategory");
$stmt->execute();
while ($row = $stmt->fetch()) {
	echo 'Game Name: ';
	echo $row['gameName'];
	echo ' Genre: ';
	echo $row['gameGenre'];
	echo '<br>';
}
}
?>
