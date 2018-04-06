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

function addUser($userID, $firstName, $lastName, $userPassword, $database) {
	// Add user to database
	$sql = file_get_contents('sql/addUser.sql');
	$params = array(
		'userID' => $userID,
		'firstName' => $firstName,
		'lastName' => $lastName,
		'userPassword' => $userPassword
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	
}

?>