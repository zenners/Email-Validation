<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root'); //set DB_PASS as 'root' if you're using MAMP
define('DB_DATABASE', 'email_validation');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

if (mysqli_connect_errno())
{
	echo "error connection to database: <br>";
	echo mysqli_connect_errno();
}

function fetch_results($query){
	global $connection;
	$result = mysqli_query($connection, $query);
	$rows = array();
	while($row = mysqli_fetch_assoc($result))
	{
		$rows[] = $row;
	}
	return $rows;
}
?>