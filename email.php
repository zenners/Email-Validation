<?php 
session_start();
require('connection.php');
 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email validation</title>
</head>
<body>
	<?php 
	if(isset($_SESSION['error']))
	{
		foreach($_SESSION['error'] as $name => $message)
		{
	?>
		<p><?=$message?></p>

	<?php 
		}
	}
	elseif (isset($_SESSION['success_message']))
	{ 
		?>
		<p><?=$_SESSION['success_message']?></p>
	<?php
	}
	?>
	<form action="process.php" method="post">
<!-- 		<input type="hidden" name="action" value="add">
 -->		<label for="">Enter Your Email</label>
		<input type="text" name="email" id="" placeholder="Email">
		<input type="submit" value="register">
	</form>
	
</body>
</html>

<?php 
	$_SESSION=array();
 ?>