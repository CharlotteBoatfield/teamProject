<?php

require("../model/db.php");
$sql = "DELETE FROM gameCategory WHERE gameName = '{$_POST['removedGameName']}'";
$stmt = $conn->prepare($sql);
$result = $stmt->execute();

if ($stmt->rowCount() == 0) {
    echo 'An error occurred and the game could not be deleted.';
} else {
    echo 'The game was removed from the list.';
}
?>

<html>
	<a href="../view/html/gameCategoryForm.php">Back to Admin Panel</a>
	   </html>