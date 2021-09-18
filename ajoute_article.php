<?php 
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=tadecodz','root','');
if (isset($_POST['ajouter'])) {
	if (!empty($_POST['titre']) && !empty($_POST['prix']) && !empty($_POST['description']) && !empty($_POST['image'])) {
		$titre=$_POST['titre'];
		$prix=$_POST['prix'];
		$image=$_POST['image'];
		$description=htmlspecialchars($_POST['description']);

		$inseArticle=$bdd->prepare('INSERT INTO article (titre, prix, description, image) VALUES (?,?,?,?)');
		$inseArticle->execute(array($titre,$prix,$description,$image));		
		echo "<script type=\"text/javascript\">alert('Article ajoutée !');</script>";
		header('Location:afficher_article.php');
	}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Publier un article</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="imag/logo.png">
</head>
<body>
	<?php 
	include("heder.php");
	?>
	<div style="min-height: 61vh; ">
		<form method="post"  autocomplete="off" enctype="multipart/form-data">
			<label for="titre">Titre article</label>
			<input type="text" name="titre" id="titre"> <br> <br>

			<label for="prix">Prix</label>
			<input type="text" name="prix" id="prix"> <br> <br>

			<label for="description">Description article</label>
			<textarea name="description" id="description"></textarea> <br> <br>

			<label for="image">image</label>
			<input type="text" name="image" id="image"> <br> <br>


			<input type="submit" name="ajouter" value="Ajouter"> <br> <br> 
		</form>
	</div>
	<?php
	include('foter.php');
	?>
</body>
</html>

<style type="text/css">
	form{	
		width: 35%;
		margin-right: auto;
		margin-left: auto;
		padding: 10px;	
		border: solid #e1a3a3;
		border-radius: 1.2em;
		background-color: rgba(234,179,168,0.2);
		margin-bottom: 25px;
		margin-top: 25px;
		min-height: 50vh;

	}
	label{			
		border-radius: 5px;
		border : 1.2px #f5c5c5 solid;
		width: 30%;
		color: black;
		font-weight: bold;
		margin:5px;
	}
	input{
		width: 32%;
		background-color: transparent;
		border-radius: 0.5em;
	}
	textarea{
		background-color: transparent;
	}
	input[type=submit]{
		border: solid 1px #e1a3a3;
		border-radius: 0.6em;
		background-color: transparent;
		float: right;
		margin-right: 8%;
	}

	body{
		background-color: #fbe7e4;

	}
</style>