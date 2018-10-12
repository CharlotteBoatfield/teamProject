<?php
require("../model/db.php");
require("../model/dbFunctions.php");
if (!empty([$_POST])) {

    $email = !empty($_POST['subject']) ? testUserInput(($_POST['subject'])): null;
    $username = !empty($_POST['message'])? testUserInput(($_POST['message'])):null;

    $sql = "INSERT INTO `contact` (`userID`, `subject`, `message`) VALUES (NULL, '{$_POST['subject']}', '{$_POST['message']}'";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute();
}