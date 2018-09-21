<?php

require("../model/db.php");

$sql = "UPDATE `gameCategory` SET `gameName` = '{$_POST['newGameName']}', `gameGenre` = '{$_POST['newGameGenre']}' WHERE `gameCategory`.`gameName` = '{$_POST['oldGameName']}'";

$stmt = $conn->prepare($sql);
$result = $stmt->execute();

if($stmt->rowCount() == 0) {
	echo 'The game could not be updated.';
} else {
	echo 'The game list was updated.';
}
?>

<html>
	<a href="../view/html/gameCategoryForm.php">Back to Admin Panel</a>
	   </html>