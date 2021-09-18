<?php 
session_start();
$bdd= new PDO('mysql:host=localhost;dbname=tadecodz','root',''); // Declarer la bdd
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$getid=$_GET['id'];
	$recupArticle=$bdd->prepare('SELECT * FROM article WHERE id=?');
	$recupArticle->execute(array($getid));
	if ($recupArticle->rowCount()>0) {
		$articleInfos=$recupArticle->fetch(); // Stocke les donnees d'un article dans une table 
		$titre=$articleInfos['titre'];  // Recuperer le titre  
		$description=$articleInfos['description']; // Recuperer la description
		$prix=$articleInfos['prix'];  // Recuperer le titre  
		// $image=$articleInfos['image'];  // Recuperer le titre  
		
		if (isset($_POST['modifier'])) {
		$titre_saisi=htmlspecialchars($_POST['titre']);   // Recuperer les donnees saisi
		$description_saisi=nl2br(htmlspecialchars($_POST['description']));
		$prix_saisi=htmlspecialchars($_POST['prix']);   // Recuperer les donnees saisi
		//$image_saisi=htmlspecialchars($_POST['image']);   // Recuperer les donnees saisi

		$updateArticle=$bdd->prepare('UPDATE article SET titre=? , prix=?, description=?  WHERE id=? ');
		$updateArticle->execute(array($titre_saisi,$prix_saisi,$description_saisi,$getid));
		header('Location: afficher_article.php');
	}
}}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier l'article</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="imag/logo.png">
</head>
<body>
	<?php include('heder.php'); ?>
	<form method="post" action="" autocomplete="off"  enctype="multpart/form-data">

		<label for="titre">Titre</label>
		<input type="text" name="titre" id="titre" value="<?php echo $titre; ?>"> <br> <br>    <!-- Afficher l'enciene tittre  -->

		<label for="description">Description</label>
		<textarea name="description" id="description"><?php echo $description; ?></textarea><br> <br>    <!-- Afficher l'enciene description  -->

		<label for="prix">Prix</label>
		<input type="text" name="prix" id="prix" value="<?php echo $prix; ?>"> <br> <br>

		<!-- <label for="image">Image</label>
			<input type="file" name="image" id="image" value="<?php echo $image; ?>"> <br> <br> -->

			<input type="submit" name="modifier" value="Modifier"> <br><br>
		</form>
		<?php include('foter.php'); ?>
	</body>
	</html>
	<style type="text/css">
		form{	
			width: 40%;
			margin-right: auto;
			margin-left: auto;
			padding: 10px;	
			border: solid;
			border-radius: 1.2em;
			background-color: rgba(234,179,168,0.2);
		}
		label{
			margin:5px;
			border-radius: 5px;
			border:1.2px #f5c5c5 solid;
			padding: 2px;
			color: black;
			font-weight: bold; 
			width: 25%;
		}
		input{
			width: 38%;
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
			width: 25%;
		}

		body{
			background-color: #fbe7e4;
		}
	</style>