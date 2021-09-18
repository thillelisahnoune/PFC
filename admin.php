<?php session_start(); 
$bdd=new PDO('mysql:host=localhost;dbname=tadecodz','root','');
if (isset($_POST['admin'])) {
	header('Location:connexion.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Espace admin</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="imag/logo.png">
	
	<body>
		<?php  include('heder.php'); ?>
		<div class="container" style="min-height: 65vh; width: 45%;"> 
			<br> <br>
			<a href="ajoute_article.php">Ajouter un article</a><br>
			<a href="afficher_article">Afficher les articles</a><br> 
			<a href="afficher_users">Afficher les utilisateurs</a><br> <br>
			<a href="deconnexion.php"><button name="deconexion">Deconnexion</button></a> <br>
		</div>
		<?php  include('foter.php'); ?>
	</body>
	</html>
	<style type="text/css">
		body{
			background-color: #fbe7e4;
		}
		button{
			margin-right: 5%;
		}
		a:hover{
			color: #e1a3a3;
		}
		button{
			border: solid 1px #e1a3a3;
			border-radius: 0.6em;
			background-color :#e1a3a3;
			float: right;
		}
	</style>