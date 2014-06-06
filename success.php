<?php 
session_start();
require('connection.php');
$query = "SELECT * FROM emails";
$emails = fetch_results($query);



?>

 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Success</title>
 </head>
 <body>
 	<h1>Much Success!</h1>
	<?php 
		if (isset($_SESSION['success_message']))
	{ 
		?>
		<p><?=$_SESSION['success_message']?></p>
	<?php
	}
	foreach ($emails as $email)
	{ ?>
		<p><?=$email['email_address']?></p>

	<?php
	}

	?>
 </body>
 </html>

 <?php 
$_SESSION=array()
  ?>