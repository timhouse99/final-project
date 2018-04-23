<?php 
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$message = htmlspecialchars($_POST['message']);
		$messageTime = date("Y-m-d H:i:s");
		$userID = $_SESSION["userID"];
		$message = addMessage($userID, $message, $messageTime, $database);
}

$messages = getMessages($database);

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
		<h1>Message Board</h1>
			<form action="" method="Post">
				<div class="form-element">
					<label>Message:</label>
						<textarea name="message" rows="10" cols="70">
						</textarea>
				</div>		
				<div class="form-element">
					<input type="submit" class="button" />&nbsp;
					<input type="reset" class="button" />
				</div>
			</form>
	</div>
	<div class="page">
		<h1>Posted Messages</h1>
			<table>
				<tr>
					<th>Message ID</th>
					<th>Posted by</th>
					<th>Message</th>
					<th>Posted Date</th>
				</tr>
				<?php foreach ($messages as $message) : ?>
					<tr>
						<td><?php echo $message['messageID']; ?>  </td> 
						<td><?php echo $message['firstName'];?>&nbsp<?php echo $message['lastName'];?></td> 
						<td><?php echo $message['message']; ?>  </td> <td> <?php echo $message['messageTime']; ?></td>
					</tr>
				<?php endforeach ?>
			</table>
	</div>
</body>
</html>
		