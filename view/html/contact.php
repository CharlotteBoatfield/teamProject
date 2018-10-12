<?php
session_start();
	if(!isset($_SESSION['user'])){
		header('Location:../login.html');
	}
?>

<!doctype html>
<html>

<head>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-grid.css">
	<link href="css/bootstrap-reboot.css">
	<title>Team</title>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.bundle.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
	</script>
</head>

<body>
	<nav class="nav">
		<?php
		if ($_SESSION['username'] == 'admin')
		require('../../controller/adminMenu.php');
        if (isset($_SESSION['loggedin']) != "true") require('../../controller/loggedOutMenu.php');
		elseif (isset($_SESSION['loggedin']) == "true") require('../../controller/loggedInMenu.php');
        ?>
	</nav>
	<section class="content">
	<form action="../../controller/contactManagement.php" method="POST">
		<legend>Contact Us</legend>
		 <div class="form-group">
    <label for="contactSubject">Subject</label>
    <input type="text" class="form-control" id="inputAddress2">
  </div>
		<div class="form-group">
			<label for="contactMessage"> Message</label>
			<textarea class="form-control" id="contactMessage" rows="3"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
		</section>
	<footer>
	Team
		<?php
		include("../../controller/footer.php")
			?>
	</footer>
</body>

</html>
