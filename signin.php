<html>
	<head>
		<title> Codacious - Sign in </title>
	</head>
	<style>
		body
		{
			background-color: #444445;
			color:#FFFFFF;
		}
	</style>
	<body OnLoad="document.login.user.focus()" text="#FFFFFF">
		<h1> Sign in </h1>
		<form method="get" action="passwordSystem.php" id="login" >
			Username:<input type="text" size="12" maxlength="12" name="user"><br/>
			Password:<input type="password" size="12" maxlength="36" name="pass"><br/>
			<input type ="submit">
		</form>
		<a href="newuser.php">New User</a>
	</body>
</html>