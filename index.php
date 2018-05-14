<?php
	session_start();
	if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
		header('Location: login.php');
		die;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Page Utilisateur</title>
	<link rel="stylesheet" href="css.css" />
</head>
<body>
	<h2>Page personnelle</h2>
	<h2>Bienvenue cher.e <?php echo $_SESSION['username']; ?></h2>
	<hr>

	<button><a href="logout.php">Déconnexion</a></button>

</body>
</html>
