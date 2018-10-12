<?php
session_start();
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
        if (isset($_SESSION['login']) != true) require('../../controller/loggedOutMenu.php');
		elseif (isset($_SESSION['login']) == true) require('../../controller/loggedInMenu.php');
        ?>
	</nav>
	<section class="content">
		<div class="list-group">
			<a href="#" class="list-group-item list-group-item-action">
    Game 1
  </a>
			<a href="#" class="list-group-item list-group-item-action">Game 2</a>
			<a href="#" class="list-group-item list-group-item-action">Game 3</a>
			<a href="#" class="list-group-item list-group-item-action">Game 4</a>
			<a href="#" class="list-group-item list-group-item-action">Game 5</a>
		</div>
	</section>
	<footer>Team
	<?php
		include("../../controller/footer.php")
			?></footer>
</body>

</html>
