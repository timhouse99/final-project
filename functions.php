<?php 


function searchUser($userID, $userPassword, $database) {
	// Get user from database
	$sql = file_get_contents('sql/getUser.sql');
	$params = array(
		'userID' => $userID,
		'userPassword' => $userPassword
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$user = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $user;
}

function addUser($firstName, $lastName, $userPassword, $database) {
	// Add user to database
	$sql = file_get_contents('sql/addUser.sql');
	$params = array(
		'firstName' => $firstName,
		'lastName' => $lastName,
		'userPassword' => $userPassword
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$userID = $database->lastInsertId();
	return $userID;
}

function getEvents($database) {
	// Get event from database
	$sql = file_get_contents('sql/getEvents.sql');
	$statement = $database->prepare($sql);
	$statement->execute();
	$events = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $events;
}

function getEvent($eventID, $database) {
	// GET URL event to fill form
	$sql = file_get_contents('sql/getEvent.sql');
	$params = array(
		'eventID' => $eventID
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$event = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $event;
}

function search($search, $database) {
	$sql = file_get_contents('sql/searchEvent.sql');
	$params = array(
		'search' => "%".$search."%"
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$event = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $event;
}

function addEvent($eventName, $location, $date, $userID, $database) {
	// Add user to database
	$sql = file_get_contents('sql/addEvent.sql');
	$params = array(
		'eventName' => $eventName,
		'location' => $location,
		'date' => $date,
		'userID' => $userID
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$eventID = $database->lastInsertId();
	return $eventID;
}

function updateEvent($eventID, $eventName, $location, $date, $userID, $database) {
	// Add user to database
	$sql = file_get_contents('sql/updateEvent.sql');
	$params = array(
		'eventID' => $eventID,
		'eventName' => $eventName,
		'location' => $location,
		'date' => $date,
		'userID' => $userID
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	return;
}

function getMessages($database) {
	// Get event from database
	$sql = file_get_contents('sql/getMessages.sql');
	$statement = $database->prepare($sql);
	$statement->execute();
	$messages = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $messages;
}

function addMessage($userID, $message, $messageTime, $database) {
	// Add user to database
	$sql = file_get_contents('sql/addMessage.sql');
	$params = array(
		'userID' => $userID,
		'message' => $message,
		'messageTime' => $messageTime,
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$messageID = $database->lastInsertId();
	return $messageID;
}



?>