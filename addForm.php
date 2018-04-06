<?php 
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$userID = htmlspecialchars($_POST['userID']);
		$firstName = htmlspecialchars($_POST['firstName']);
		$lastName = htmlspecialchars($_POST['lastName']);
		$userPassword = htmlspecialchars($_POST['userPassword']);

		addUser($userID, $firstName, $lastName, $userPassword, $database);
		$users = searchUser($userID, $userPassword, $database);

		$action = 'update';
		$user = $users[0];
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Web Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="page">
		<h1>User Form</h1>
			<form action="" method="Post">
				<div class="form-element">	
					<h2>Add User</h2>
					<label>User ID:</label>
						<input type="text" name="userID" value="" />
				</div>
				<div class="form-element">
					<label>First Name:</label>
						<input type="text" name="firstName" value="" />
				</div>		
				<div class="form-element">	
					<label>Last Name:</label>	
						<input type="text" name="lastName" value="" />
				</div>
				<div class="form-element">
					<label>User Password:</label>	
						<input type="password" name="userPassword" value="" />
				</div>
				<div class="form-element">
					<input type="submit" class="button" />&nbsp;
					<input type="reset" class="button" />
				</div>
			</form>
		