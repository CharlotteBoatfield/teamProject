<?php
$conn = new PDO("mysql:host=localhost;dbname=teamDatabase", 'root', 'root');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

include("../../controller/functions.php");

?>

<!doctype html>

<head>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<title>Admin Panel</title>
</head>
<html>

<body>
	<nav class="nav">
		<?php
		if ($_SESSION['username'] == 'admin')
		require('../../controller/adminMenu.php');
        if (isset($_SESSION["login"]) != 'true') require('../../controller/loggedOutMenu.php');
		if(isset($_SESSION["login"]) == 'true') require('../../controller/loggedInMenu.php');
        ?>
	</nav>
	<section class="content">
		<h3>All Categories</h3>
		<div class="phpOutput">
			<?php
getCategories();
?>
		</div>

		<form action="../../controller/addCategory.php" method="POST">
			<Legend>Add Game Category</Legend>
			<input type="text" required class="form-control" name="gameName" placeholder="Game Name">
			<input type="text" required class="form-control" name="gameGenre" placeholder="Game Genre">
			<input type="submit" class="form-control" name="submit">
		</form>

		<form action="../../controller/deleteCategory.php" method="POST">
			<Legend>Remove Game Category</Legend>
			<input type="text" required class="form-control" name="removedGameName" placeholder="Game Name">
			<input type="text" required class="form-control" name="gameGenre" placeholder="Game Genre">
			<input type="submit" class="form-control" name="submit">
		</form>
		<form action="../../controller/updateCategory.php" method="POST">
		<Legend>Update Game Name</Legend>
			<input type="text" required class="form-control" name="oldGameName" placeholder="Old Game Name">
			<input type="text" required class="form-control" name="newGameName" placeholder="New Game Name">
			<input type="text" required class="form-control" name="newGameGenre" placeholder="New Game Genre">
			<input type="submit" class="form-control" name="submit">
		</form>
	</section>
</body>
<footer>
	Team
	<?php
		include("../../controller/footer.php")
			?>
	</footer>
</html>
