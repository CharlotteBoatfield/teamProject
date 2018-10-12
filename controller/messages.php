<?php
session_start();

    if(isset($_SESSION['error'])) {
	echo "<div>{$_SESSION['error']}</div>";
	unset($_SESSION['error']);
    }
    if(isset($_SESSION['message'])) {
	echo "<div>{$_SESSION['message']}</div>";
	unset($_SESSION['message']);
    };
?>