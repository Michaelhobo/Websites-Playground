<?php
	$user = $_GET['newUser'];
	$pass = $_GET['newPass'];
	$confirmPass = $_GET['confirmPass'];
	
	define('db_server', 'codacious.us');
	$db_user = 'root';
	$db_password = 'C0dacious';
	$db_dbname = 'passwords';	
	$db = mysql_connect(db_server, $db_user, $db_password);
	mysql_select_db($db_dbname);
	
	if($pass === $confirmPass)
	{
		$hashed_pass = md5($pass);
		mysql_query("INSERT INTO users_and_hashes (users, hashes) VALUES ('$user', '$hashed_pass')");
	}
	mysql_close($db);
	echo $user;
	echo $pass;
	echo $confirmPass;
	echo "hello";
?>
