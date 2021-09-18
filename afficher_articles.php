<?php 
session_start();
$bdd= new PDO('mysql:host=localhost;dbname=tadecodz','root',''); // Declarer la bdd
?>
<!DOCTYPE html>
<html>
<head>
	<title>Afficher les articles </title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="imag/logo.png">
</head>
<body>
	<?php 
	include('heder.php');
	$recupArticles=$bdd->query('SELECT * FROM article');  // Lancer une requette dans la bdd pour recupere tout les articles 
	?> <br><?php
	while ($article=$recupArticles->fetch()) { //recuperer les donnees de la table 
		?>
		<div class="container">
			<div class="col-12 col-md-4" style="border: 1px solid black;">
				<h4><?= $article['image'];?></h4> 
				<h4><?= $article['titre'];?></h4>      
				<h4><?= $article['prix'];?></h4>			
				<a href="ajouterPanier.php?id=<?= $article['id'];?>" style="color: red; text-decoration: none;"><button>Ajouter au panier</button> </a> 
			</div> <br>
		</div>
		<?php
	} // While
	include('foter.php');
	?>
</body>
</html>
<style type="text/css">	
	button{
		border: solid 1px #e1a3a3;
		border-radius: 0.6em;
		background-color: #e1a3a3;
	}

	.col-12.col-md-4{
		border-radius: 2em;
		border :1px;
		padding: 0.5em;
		text-align: center;
		background-color: rgba(234,179,168,0.2);
		margin-right: auto;
		margin-left: auto;
	}
	body{
		background-color: #fbe7e4;
	}
</style>