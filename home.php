<?php 

include('config.php');

if (isset($_SESSION["userID"])) {
$userID = $_SESSION["userID"];

$events = getEvents($database);
}
else {
	header('location: index.php');
}
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
<table>
<tr>
	<th>Event Title</th>
	<th>Location</th>
	<th>Date Time</th>
	<th>Edit Event</th>
</tr>
<?php foreach ($events as $event) : ?>
	<TR>
		<td><?php echo $event['eventName']; ?>  </td> <td><?php echo $event['location']; ?>  </td> <td><?php echo $event['date']; ?>  </td> <td> <a href="eventForm.php?eventID=<?php echo $event['eventID']; ?>" >Edit Event</a></td>
	</TR>
<?php endforeach ?>
</table>
<a href="eventForm.php">Add Event</a>
</div>
<div class="page">
<p>Logged in user: <?php echo $userID?>
</div>
<div class="page">
<a href="logout.php">Logout</a>
</div>
</body>
</html>
