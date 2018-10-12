<?php
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
        if (isset($_SESSION["login"]) != 'true') require('../../controller/loggedOutMenu.php');
		elseif(isset($_SESSION["login"]) == 'true') require('../../controller/loggedInMenu.php');
        ?>
	</nav>
	<section class="content">
		<h1>Frequently Asked Questions and Legal</h1>
		<h3><b>Disclaimer</b></h3>
		<p>Team is not associated with any game company that has games listed on this website, or any company that is listed as a platform for these games.</p>
		<h3><b>Privacy Policy</b></h3>
		<p>Personal information collected by Team is limited to the email given at registration, and is only utilised to allow for contact messages to be responded to, along with subscription services being sent to that email address.</p>
		<h3><b>Terms and Conditions</b></h3>
		<p>Accounts created as duplicates in order to spam the system in an attempt to overload it can be immediately cancelled.</p>
		<p>This site runs on user-submitted information and so human error in the friend codes is the fault of the original user to submit the post.</p>
		<p>All game categories are added to the available list by sufficient user request.</p>
		<h3><b>Refunds</b></h3>
		<p>Team will accept and process refunds in the event that the incorrect service is supplied, an incorrect amount is charged, or within the first week of a subscription period.</p>
	</section>
	<footer>Team
	<?php
		include("../../controller/footer.php")
			?>
	</footer>
</body>

</html>