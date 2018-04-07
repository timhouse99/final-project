<?php 
include('config.php');

$userID = htmlspecialchars($_POST['userID']);
$userPassword = htmlspecialchars($_POST['userPassword']);

echo $userID;
echo $userPassword;
$users = searchUser($userID, $userPassword, $database);
echo print_r($users);

//if user is in the users table 
if (!empty($users)) {
$action = 'update';
$user = $users[0];

}
elseif (empty($users)) {
	$action = 'add';
header('location: addForm.php');
}


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
		<h1>User Form</h1>
			<form action="" method="Post">
				<div class="form-element">
					<?php if($action == 'update')  : ?>
					<h2>Update User</h2>
					<label>First Name:</label>	
						<input type="text" name="firstName" value="<?php echo $user['firstName'] ?>" />
				</div>
				<div class="form-element">	
					<label>Last Name:</label>	
						<input type="text" name="lastName" value="<?php echo $user['lastName'] ?>" />
				</div>
					<?php elseif ($action == 'add') : ?>
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
					<?php endif; ?>
				</div>
				<div class="form-element">
					<input type="submit" class="button" />&nbsp;
					<input type="reset" class="button" />
				</div>
			</form>
	</div>
</body>
</html>