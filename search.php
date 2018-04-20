<?php 
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$search = htmlspecialchars($_POST['search']);
		$searchResults = search($search);
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Search Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="menu">
		<?php include('includes/menu.php');?>
	</div>
	<div class="page">
		<h1>Search</h1>
			<form action="" method="Post">
				<div class="form-element">
					<label>Search:</label>
						<input type="text" name="search" value="" />
				</div>		
				<div class="form-element">
					<input type="submit" class="button" />&nbsp;
					<input type="reset" class="button" />
				</div>
			</form>
	</div>
</body>
</html>