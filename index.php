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


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<div class="page">
		<?php include('includes/menu.php');?>
	</div>
	<title>Web Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="page">
		<h1>Crafter-web login</h1>
			<form action="form.php" method="Post">
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
			</form>
</body>
</html>

