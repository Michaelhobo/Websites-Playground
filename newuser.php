<html>
	<head>
		<title> Codacious - Make a new account </title>
	</head>
	<style>
		body
		{
			background-color: #444445;
			color:#FFFFFF;
		}
	</style>
	<body OnLoad="document.login.user.focus()" text="#FFFFFF">
		<form method="get" action="makeNewUser.php" id="new user">
			Username:<input type="text" size="12" maxlength="12" name="newUser"><br/>
			Password:<input type="password" size="12" maxlength="36" name="newPass"><br/>
			Confirm Password:<input type="password" size="12" maxlength="36" name="confirmPass"><br/>
			<input type="submit">
		</form>
	</body>
</html>