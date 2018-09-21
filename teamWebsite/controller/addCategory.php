<?php

require("../model/db.php");
    $sql = "INSERT INTO `gameCategory` (`gameCategoryID`, `gameName`, `gameGenre`) VALUES (NULL, '{$_POST['gameName']}', '{$_POST['gameGenre']}')";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute();

if($stmt->rowCount() == 0) {
	echo 'The game could not be entered.';
} else {
	echo 'The game list was updated.';
}
?>

<html>
	<a href="../view/html/gameCategoryForm.php">Back to Admin Panel</a>
	   </html>