<?php 

include('config.php');

if (isset($_SESSION["userID"])) {
$userID = $_SESSION["userID"];

$events = getEvents($database);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$search = htmlspecialchars($_POST['search']);
		$events = search($search, $database);
}

}
else {
	$_SESSION['errMsg'] = "Login or create a User";
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
<div>
	<table class="user">
		<tr>
			<td>
				<img class="photo" src="images/profile.<?php echo $userID; ?>.jpg">
			</td>
		</tr>
		<tr>
			<td>
				Logged in user: <?php echo $userID?>
				<p><a href="logout.php">Logout</a></p>
			</td>
		</tr>
		<tr>
			<td>
				<a href="messages.php">View Messages</a>
			</td>
		</tr>
	</table>
</div>
<div class="page">
<h1>Home</h1>
</div>
	<div class="page">
		<h1>Search for a Event</h1>
			<form action="" method="Post">
				<div class="form-element">
					<label>Search Event Name:</label>
						<input type="text" name="search" value="" />
				</div>		
				<div class="form-element">
					<input type="submit" class="button" />&nbsp;
					<input type="reset" class="button" />
				</div>
			</form>
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
					<tr>
						<td><?php echo $event['eventName']; ?>  </td> <td><?php echo $event['location']; ?>  </td> <td><?php echo $event['date']; ?>  </td> <td> <a href="eventForm.php?eventID=<?php echo $event['eventID']; ?>" >Edit Event</a></td>
					</tr>
				<?php endforeach ?>
			</table>
		<a href="eventForm.php">Add Event</a>
	</div>
</body>
</html>
