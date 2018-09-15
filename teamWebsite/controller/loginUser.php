<?php
if (!empty([$_POST]))
{
$username = !empty($_POST['username'])? test_user_input(($_POST['username'])): null;
$password = !empty($_POST['password'])? test_user_input(($_POST['password'])): null;
try {

$stmt = $conn->prepare("SELECT password FROM users WHERE username=:username");
$stmt->bindParam(':username', $username);
$stmt->execute();
$rows = $stmt -> fetch();
if(password_verify($password, $rows['password'])){
$_SESSION["adminUser"] = $username;
$_SESSION["login"] = true;
header('location:../view/html/gameCategoryForm.php');
}
else {
header('location:../index.php');
}
catch(PDOException $e)
{
echo "Account creation problems".$e -> getMessage();
die();
}
?>
