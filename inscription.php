	<?php session_start(); 


							 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" href="style" />
	<meta charset="utf-8">
	<link rel="shortcut icon" sizes="16x16" href="https://cdn1.iconfinder.com/data/icons/micon-social-pack/512/twitch-512.png">
</head>

<body>
	<table style="background-color: purple;" width="101%" height="100px" class="enteteformulaire">
		<tr>
			<td >
				<h2 align="center" class="h2">Le formulaire</h2>
			</td>
		</tr>
	</table>
<table class="tbi" align="center">
	<tr>
		<td>
			<form method="post" action="pageaccueil.php"> <?php // ou pageaccueil_connecte.php?>
			<label for="pseudo">Votre Pseudo</label> <input type="text" name="pseudo" required> <br>
			<label for="password">Votre Mdp</label> <input type="password" name="password" required> <br>
			 <label for="email">Votre adresse courriel</label> <input type="email" name="email"> <br>
             <input type="texte" name="true" value="true" hidden="true">
			<input type="submit" name="boutonenvoyer">
			</form>
		</td>
	</tr>
</table>

</body>
</html>
