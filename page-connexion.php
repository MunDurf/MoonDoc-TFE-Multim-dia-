<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Asus-Rog-Fan</title>
		<link rel="stylesheet" href="../css/style-page.css"/>
		<link rel="shortcut icon" href="../image/logo-asus.png"/>
	</head>
	<body>
	<?php
			if ($_SESSION["niveau"] == 0)
				include('menu/menu-page.php');
			elseif ($_SESSION["niveau"] == 1)
				include('menu/menu-page.php');
			elseif ($_SESSION["niveau"] == 2)
				include('menu/menu-admin.php');
	?>
		<br><br><br>
		<div style="text-align:center; vertical-align:center;">
		<h2><legend style="text-align:center; color:white;"> Formulaire de connexion</legend></h2><br><br>
			<form method="post" action="testConnexion.php" style="color:white; "> <br>
				
				<label for="pseudo">Pseudo :</label><br>
					<input type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo">
				<br><br>
				
				<label for="mdp">Mot de passe :</label><br>
					<input type="password" id="mdp" name="mdp" placeholder="Mot de Passe">
				
				<br><br>
				
				<input type="submit" value="Connexion">
			</form>
		</div>
	</body>
	<footer>
	</footer>
</html>