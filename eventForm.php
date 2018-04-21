<?php 
include('config.php');

if(isset($_GET['eventID'])) {
$eventID = $_GET['eventID'];
$formType = "edit";

$event = getEvent($eventID, $database);
$event = $event[0];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$eventName = htmlspecialchars($_POST['eventName']);
		$location = htmlspecialchars($_POST['location']);
		$date = htmlspecialchars($_POST['date']);
		$userID = $_SESSION["userID"];
		$eventID = $eventID;
		
		echo $eventName;
		echo $location;
		echo $date;
		echo $userID;
		
		$eventID = updateEvent($eventID, $eventName, $location, $date, $userID, $database);
		$_SESSION["message"] = "Thank you for updating the Event";
		//redirect to home.php as logged in user 
		header('location: home.php');
	}
}
else {
	$formType = 'add';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$eventName = htmlspecialchars($_POST['eventName']);
		$location = htmlspecialchars($_POST['location']);
		$date = htmlspecialchars($_POST['date']);
		$userID = $_SESSION["userID"];
		
		echo $eventName;
		echo $location;
		echo $date;
		echo $userID;
		
		$eventID = addEvent($eventName, $location, $date, $userID, $database);
		$_SESSION["message"] = "Thank you for adding Event";
		//redirect to home.php as logged in user 
		header('location: home.php');
	}

}


?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Event Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	<div class="menu">
		<?php include('includes/menu.php');?>
	</div>
	<div class="page">
		<h1>Event Form</h1>
			<form action="" method="Post">
				<div class="form-element">
					<label>Event Name:</label>
					<?php if($formType == 'add') : ?>
						<input type="text" name="eventName" value="" />
					<?php elseif($formType == 'edit') : ?>
						<input type="text" name="eventName" value="<?php echo $event['eventName']?>">
					<?php endif ?>
				</div>		
				<div class="form-element">	
					<label>Location:</label>	
					<?php if($formType == 'add') : ?>
						<input type="text" name="location" value="" />
					<?php elseif($formType == 'edit') : ?>
						<input type="text" name="location" value="<?php echo $event['location']?>" />
					<?php endif ?>
				</div>
				<div class="form-element">
					<label>Date/Time:</label>
					<?php if($formType == 'add') : ?>
						<input type="datetime" name="date" value="" />
					<?php elseif($formType == 'edit') : ?>
						<input type="datetime" name="date" value="<?php echo $event['date']?>" />
					<?php endif ?>
				</div>
				<div class="form-element">
					<input type="submit" class="button" />&nbsp;
					<input type="reset" class="button" />
				</div>
			</form>
	</div>
</body>
</html>
		