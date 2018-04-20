<?php 
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$firstName = htmlspecialchars($_POST['firstName']);
		$lastName = htmlspecialchars($_POST['lastName']);
		$userPassword = htmlspecialchars($_POST['userPassword']);

		$userID = addUser($firstName, $lastName, $userPassword, $database);
		$_SESSION["userID"] = $userID;
		//redirect to home.php as logged in user 
		header('location: home.php');
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
	<div class="menu">
		<?php include('includes/menu.php');?>
	</div>
	<div class="page">
		<h1>User Form</h1>
			<form action="" method="Post">
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
	</div>
</body>
</html>
		