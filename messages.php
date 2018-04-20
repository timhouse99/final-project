<?php 
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$message = htmlspecialchars($_POST['message']);
		$message = addMessage($_SESSION[userID],$message);
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Messages Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="menu">
		<?php include('includes/menu.php');?>
	</div>
	<div class="page">
		<h1>Messages</h1>
			<form action="" method="Post">
				<div class="form-element">
					<label>Message:</label>
						<input type="memo" name="message" value="" />
				</div>		
				<div class="form-element">
					<input type="submit" class="button" />&nbsp;
					<input type="reset" class="button" />
				</div>
			</form>
	</div>
</body>
</html>
		