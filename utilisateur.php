<?php session_start();
$bdd=new PDO('mysql:host=localhost;dbname=tadeco','root','');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Espace utilisateur</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="icon" type="image/png" href="imag/logo.png">
</head>
<body>
	<?php  include('heder.php'); ?>
	<div class="container" style="min-height: 65vh; width: 40%;">
		<br> <br>
		<a href="catalogue.php">Afficher le catalogue</a><br>
		<a href="afficher_articles.php">Afficher les articles</a><br>
		<a href="commander.php">Passer une commande</a><br> <br>
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
	.div{
		margin-left: 30px;
		margin-top: 20px;		
	}

</style>