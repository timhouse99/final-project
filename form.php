<?php 
include('config.php');

$action = 'add';
$userID = htmlspecialchars($_POST['userID']);

echo $userID;
$user = searchUser($userID, $database);

echo print_r($user);
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
		<h1>Form</h1>
			<form action="" method="Post">
				<div class="form-element">
					<label>First Name:</label>
					<?php if($action == 'add')  : ?>
						<input type="text" name="firstName" value="<?php echo $user['firstName'] ?>" />
					<?php else : ?>
						<input readonly type="text" name="firstName" value="<?php echo $user['firstName'] ?>" />
					<?php endif; ?>
				</div>
			</form>
	</div>
</body>
</html>