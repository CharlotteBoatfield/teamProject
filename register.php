<?php
$conn = new PDO("mysql:host=localhost;dbname=teamDatabase", 'root', 'root');
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
		<a class="nav-link" href="index.html">Home</a>
		<a class="nav-link" href="gameCategories.html">Game Categories</a>
		<a class="nav-link" href="newFriendInfo.html">New Friend Information</a>
		<a class="nav-link" href="login.html">Login</a>
		<a class="nav-link" href="contact.html">Contact</a>
		</nav>
			<section class="content">
	<form action="../../controller/registerUser.php" method="post">
		<legend>Register</legend>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" id="username" name="username">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Sign Up</button>
	</form>
		</section>
		<footer>Team
		<?php
		include("../../controller/footer.php")
			?>
		</footer>
	</body>
</html>