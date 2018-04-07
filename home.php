<?php 

include('config.php');
$userID = $_SESSION["userID"]

?>

<!DOCTYPE html>
<html lang+"en">
<head>
	<title>Home</title>
<meta charset="utf-8">
	<style>
	</style>
</head>
<body>
<div class="page">
		<?php include('includes/menu.php');?>
	</div>
<h1>Home</h1>
<p>Logged in user <?php echo $userID?>
<a href="logout.php">Logout</a>
</body>
</html>
