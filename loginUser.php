<?php
require("../model/db.php");
require("../model/dbFunctions.php");

if (!empty([$_POST]))
{
$username = !empty($_POST['username'])? testUserInput(($_POST['username'])): null;
$password = !empty($_POST['password'])? testUserInput(($_POST['password'])): null;
try {

$stmt = $conn->prepare("SELECT username FROM `users` WHERE `username` = '{$_POST['username']}' AND `password` = '{$_POST['password']}'");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();
$rows = $stmt -> fetch();
if(password_verify($_POST['password'], $password))
$_SESSION['username'] = $username;
$_SESSION["login"] = true;
	
echo('You have successfully logged in. Welcome!');
?>
	<html>
out
	<a href="../index.php">Back to home</a>
</html>
<?php
}
catch(PDOException $e)
{
echo "Account creation problems".$e -> getMessage();
die();
}
}
?>
