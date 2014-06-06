<?php 
	session_start();
	require('connection.php');

	// if(isset($_POST['action']) && $_POST['action'] == 'add')

	// {
		foreach ($_POST as $name => $value)
		{
			if(empty($value))
			{
				$_SESSION['error'][$name] = "sorry, " . $name . " cannot be blank";
			}

			elseif (!filter_var($value,FILTER_VALIDATE_EMAIL))
			{
				$_SESSION['error'][$name] = "The email you entered " . "(" . $value . ")" . " is not a valid email";
			}

			
		}
		if(!isset($_SESSION['error']))
		{
			$_SESSION['success_message'] = $value . " is a valid email";
			$query = "INSERT INTO emails (email_address, created_at) VALUES ('{$_POST['email']}', NOW())";
			mysqli_query($connection, $query);
			header('Location: success.php');
			exit;
			

		}
	// }
header('location: email.php')
 ?>