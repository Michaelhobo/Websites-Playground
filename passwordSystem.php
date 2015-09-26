<?php
	$user = $_GET['user'];
	$pass = $_GET['pass'];
	
	define('db_server', 'localhost');
	$db_user = 'admin2';
	$db_password = 'C0dacious';
	$db_dbname = 'passwords';	
	$db = mysql_connect(db_server, $db_user, $db_password);
	mysql_select_db($db_dbname);
	
	$select_query = 'SELECT * FROM users_and_hashes';
	$result = mysql_query($select_query);
	
	for($i = 0; $i < mysql_num_rows($result); $i++)
	{
		$row = mysql_fetch_row($result);
		if ($user === $row[0] and md5($pass) === $row[1])
		{
			header("Location: admin.php");
			break;
		}
	}
?>