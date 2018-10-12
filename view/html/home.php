<?php
session_start();

if(!isset($_SESSION['username'])) {
	$_SESSION['username'] = 'null';
}

?>

<!doctype html>
<html>

<head>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	<title>Team</title>
	<script src="../js/bootstrap.bundle.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
	</script>
</head>

<body>
	<nav class="nav">
		<?php
		if ($_SESSION['username'] == 'admin')
		require('../../controller/adminMenu.php');
        if (isset($_SESSION['loggedin']) != true) require('../../controller/loggedOutMenu.php');
		elseif (isset($_SESSION['loggedin']) == "true") require('../../controller/loggedInMenu.php');
        ?>
	</nav>
	<section class="content">
		<h1>Welcome to Team</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta convallis pharetra. Praesent luctus mattis imperdiet. Etiam ut augue dignissim, placerat tortor vel, euismod sem. Proin consequat venenatis velit, vulputate tempor leo. Aliquam hendrerit mi lorem, id ornare elit tempus non. Sed quis rutrum turpis. Donec blandit massa a pretium pellentesque. Suspendisse consectetur massa dolor, vel gravida nisl bibendum vel. Etiam maximus tristique ante, et pharetra justo pretium id. Fusce non volutpat odio, ut fringilla massa.</p>
		<p>Pellentesque eleifend vel turpis vel euismod. Nulla id felis ut neque semper vehicula vel cursus est. Nunc tempor consequat mi et interdum. Nunc aliquet rhoncus ligula non tincidunt. Proin malesuada, dolor non iaculis luctus, ligula risus laoreet diam, sit amet mattis nisi sapien vel nunc. Proin rhoncus, justo id pretium aliquam, urna lorem cursus dui, quis euismod magna libero ut neque. Vestibulum non aliquam felis, vel condimentum lectus. Proin quis mi eu ante efficitur porttitor. Etiam ullamcorper ex in lorem iaculis porta. Suspendisse id est nec elit volutpat dapibus. Suspendisse dui lorem, dapibus sed lobortis eget, aliquet eu lacus.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta convallis pharetra. Praesent luctus mattis imperdiet. Etiam ut augue dignissim, placerat tortor vel, euismod sem. Proin consequat venenatis velit, vulputate tempor leo. Aliquam hendrerit mi lorem, id ornare elit tempus non. Sed quis rutrum turpis. Donec blandit massa a pretium pellentesque. Suspendisse consectetur massa dolor, vel gravida nisl bibendum vel. Etiam maximus tristique ante, et pharetra justo pretium id. Fusce non volutpat odio, ut fringilla massa.</p>
		<p>Pellentesque eleifend vel turpis vel euismod. Nulla id felis ut neque semper vehicula vel cursus est. Nunc tempor consequat mi et interdum. Nunc aliquet rhoncus ligula non tincidunt. Proin malesuada, dolor non iaculis luctus, ligula risus laoreet diam, sit amet mattis nisi sapien vel nunc. Proin rhoncus, justo id pretium aliquam, urna lorem cursus dui, quis euismod magna libero ut neque. Vestibulum non aliquam felis, vel condimentum lectus. Proin quis mi eu ante efficitur porttitor. Etiam ullamcorper ex in lorem iaculis porta. Suspendisse id est nec elit volutpat dapibus. Suspendisse dui lorem, dapibus sed lobortis eget, aliquet eu lacus.</p>
	</section>
	<footer>Team
	<?php
		include("../../controller/footer.php")
			?>
	</footer>
</body>

</html>