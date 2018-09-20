<?php
require("../model/db.php");
require("../model/dbFunctions.php");
if (!empty([$_POST])) {

    $email = !empty($_POST['email']) ? testUserInput(($_POST['email'])): null;
    $username = !empty($_POST['username'])? testUserInput(($_POST['username'])):null;
    $mypass = !empty($_POST['password'])? testUserInput(($_POST['password'])): null;
    $password = password_hash($mypass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`userID`, `email`, `username`, `password`) VALUES (NULL, '{$_POST['email']}', '{$_POST['username']}', '{$_POST['password']}')";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute();
}

if($stmt->rowCount() == 0) {
	echo 'The account could not be created.';
} else {
	echo 'Your account has been created.';
}
?>

<a href="../view/html/register.html">Back to registration</a>