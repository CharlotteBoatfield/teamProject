<?php
session_start();

require("../model/db.php");
require("../model/dbFunctions.php");
	
$sql = "
SELECT * FROM users 
    WHERE username = :username AND
	password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if(is_array($result) && sizeof($result) > 0) {
	$_SESSION['message'] = 'Login successful.';
	$_SESSION['loggedin'] = "true";
	header('Location: ../view/html/home.php'); // set client cookie!
    } else {
	$_SESSION['error'] = 'Login error. Please try again.';
	unset($_SESSION['loggedin']); 
	header('Location: ../view/html/home.php'); // set client cookie!
    }

/*if (!empty([$_POST]))
{
$username = !empty($_POST['username'])? testUserInput(($_POST['username'])): null;
$password = !empty($_POST['password'])? testUserInput(($_POST['password'])): null;
try {

$sql = "SELECT username FROM `users` WHERE `username` = '{$_POST['username']}' AND `password` = '{$_POST['password']}'";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $_POST['username']);
$stmt->bindParam(':password', $_POST['password']);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if(is_array($result) && sizeof($result) > 0) {
	$_SESSION['message'] = 'Login Successful';
	$_SESSION['login'] = true;
	echo('You have successfully logged in. Welcome!');
?>
	<html>
	<a href="../index.php">Back to home</a>
</html>
<?php
} else {
	$_SESSION['error'] = 'Login issues have occurred. Please try again or wait until later.';
	echo "Error";
}
}
catch(PDOException $e)
{
echo "Account creation problems".$e -> getMessage();
die();
}
}
*/
?>
