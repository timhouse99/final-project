<?php 

include('config.php');
$userID = $_SESSION["userID"];

$events = getEvents($database);

?>

<!DOCTYPE html>
<html lang+"en">

<style>
</style>

<head>
	<title>Home</title>
<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="menu">
<?php include('includes/menu.php');?>
</div>
<div class="page">
<h1>Home</h1>
</div>
<div class="page">
<h1>Events</h1>
<div>
<?php foreach ($events as $event) : ?>
	<div class="page">
	<TR>
		<td><?php echo $event['eventName']; ?></td> <td><?php echo $event['location']; ?></td> <td><?php echo $event['time']; ?></td>
	</TR>
	</div>
<?php endforeach ?>
</div>
</div>
<div class="page">
<p>Logged in user: <?php echo $userID?>
</div>
<div class="page">
<a href="logout.php">Logout</a>
</div>
</body>
</html>
