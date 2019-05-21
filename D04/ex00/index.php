<?
	session_start();
	var_dump($_GET);
	if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'] && $_GET['submit'] == 'OK') {
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
		var_dump($_SESSION);
	}
?>
<html>
	<body>
		<form method="get" action="index.php">
			Identifiant: <input name = "login" type="text" value="<?php echo $_SESSION['login']; ?>"><br>
			Mot de passe: <input name = "passwd" type="text" value="<?php echo $_SESSION['passwd']; ?>"><br>
			<input type="submit" name="submit" value="OK">
		</form>
	</body>
</html>