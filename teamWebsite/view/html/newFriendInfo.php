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
<?php
  //      if (isset($_SESSION["login"]) != 'true') header('location:login.php');
  //      ?>
<body>
	<nav class="nav">
		<a class="nav-link" href="../../index.html">Home</a>
		<a class="nav-link" href="gameCategories.html">Game Categories</a>
		<a class="nav-link active" href="newFriendInfo.html">New Friend Information</a>
		<a class="nav-link" href="login.html">Login</a>
		<a class="nav-link" href="contact.html">Contact</a>
	</nav>
	<section class="content">
		<form>
			<legend>New Friend Information</legend>
			<div class="form-group">
				<label for="game">Game</label>
				<select id="game" class="form-control">
        <option selected>Games</option>
        <option>Game 1</option>
				<option>Game 2</option>
				<option>Game 3</option>
				<option>Game 4</option>
				<option>Game 5</option>
      </select>
			</div>
			<div class="form-group">
				<label for="friendInfo">Friend Code</label>
				<input type="text" id="friendInfo" class="form-control">
			</div>
			<div class="form-group">
				<label for="friendInfo">Preferable Start Time</label>
				<input type="time" id="playTimeStart" class="form-control">
			</div>
			<div class="form-group">
				<label for="friendInfo">Preferable End Time</label>
				<input type="time" id="playTimeEnd" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</section>
	<footer>Team
	<?php
		include("../../controller/footer.php")
			?>
	</footer>
</body>
</html>