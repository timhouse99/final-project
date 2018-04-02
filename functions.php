<?php 

function searchUser($userID, $database) {
	// Get user from database
	$sql = file_get_contents('sql/getUser.sql');
	$params = array(
		'userID' => $userID
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$user = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $user;
}

?>