<?php 
//A configuration file that connects to a database, includes functions.php and autoloads classes
include('config.php');

//Two forms that support add/edit functionality

//At least one listing page that is searchable

//Usage of session variables somehow in the application

//A database with at least 3 tables, 2 or which are related

//Use an SQL query with a JOIN statement

//Make use of an OOP class somewhere in the application

//Use a function or class method other than the constructor method

//Properly print variables inside of HTML

//Project hosted on github

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
$userID = htmlspecialchars($_POST['userID']);
$userPassword = htmlspecialchars($_POST['userPassword']);

$users = searchUser($userID, $userPassword, $database);

//if user is in the users table 
if (!empty($users)) {
$user = $users[0];
$_SESSION["userID"] = $user["userID"];
header('location: home.php');
}
elseif (empty($users)) {
$_SESSION['errMsg'] = "Invalid username or password";
//header('location: addForm.php');
}
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<div class="menu">
	<?php include('includes/menu.php');?>
	</div>
	<title>Web Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="page">
		<h1 class="heading">Crafter-web</h1>
	</div>
	<div class="page">
		<p><h1>Login</h1></p>
			<form action="" method="Post">
				<div class="form-element">
					<label>User ID:</label>
						<input type="text" name="userID" value="" />
				</div>
				<div class="form-element">
					<label>User Password:</label>
					<input type ="password" name="userPassword" value="" />
				</div>
				<div class="form-element">
					<input type="submit" class="button" />&nbsp;
					<input type="reset" class="button" />
				</div>
				<div>
					<?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
				</div>
				<?php unset($_SESSION['errMsg']); ?>
			</form>
			<div>
				<a href="addForm.php">Sign Up for Crafter-web</a>
			</div>
</body>
</html>

