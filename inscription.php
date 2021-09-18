<?php 
	// Code pour ajouter un client a la bdd
	// session_start();
	$bdd= new PDO('mysql:host=localhost;dbname=tadecodz','root',''); // Declarer la bdd
	if (isset($_POST['ins'])) {
		if ( !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['tel']) && !empty($_POST['mail']) && !empty($_POST['pwd']) && !empty($_POST['cpwd']) ) {
			$nom=htmlspecialchars($_POST['nom']);
			$prenom=htmlspecialchars($_POST['prenom']);
			$tel=htmlspecialchars($_POST['tel']);
			$mail=htmlspecialchars($_POST['mail']);
			$pwd=sha1($_POST['pwd']);
			$cpwd=sha1($_POST['cpwd']);
			if ($pwd==$cpwd) {
				$insererUser=$bdd->prepare('INSERT INTO utilisateur (nom,prenom,tel,mail,mdp,cmpd) VALUES (?,?,?,?,?,?)');
				$insererUser->execute(array($nom,$prenom,$tel,$mail,$pwd,$cpwd));
				header("Location:utilisateur.php");
			} else {
				echo "<script type=\"text/javascript\">alert('Veuillez retapée votre mot de passe correctement SVP !');</script>";			
			}
		}	
		else{			
			echo "<script type=\"text/javascript\">alert('Veuillez remplire tout les champs SVP !');</script>";
			
		}
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Inscription</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--ajouter les mise en forme-->
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style1.css">
		<link rel="icon" type="image/png" href="imag/logo.png">
	</head>
	<body>
		<?php include('heder.php'); ?>	
		<form action="inscription.php" method="POST" autocomplete="off">

			<legend><b>inscription</b></legend>
			<label for="nom">Nom</label>
			<input type="text" name="nom" id="nom"> <br> 	

			<label for="prenom">Prénom</label>
			<input type="text" name="prenom" id="prenom"><br>

			<label for="tel">Télephone</label>
			<input type="text" name="tel" id="tel"><br>

			<label for="mail">E-mail</label>
			<input type="Email" name="mail" id="mail" placeholder="exemple@gmail.com"><br>

			<label for="pwd">Mot de passe</label>
			<input type="password" name="pwd" id="pwd"> <br>				 

			<label for="cpwd">Mod de passe retapée</label>
			<input type="password" name="cpwd" id="cpwd"> <br> <br> 

			<input type="submit" name="ins" id="ins" value="Inscrire">
			<input type="reset" name="anul" id="anul" value="Annuler"> <br><br>
		</form>
		<br>
		<?php 
		include('foter.php');
		?>
	</body>
	</html>
	<style type="text/css">
		legend{
			text-align: center;
			font-weight: bold;
		}
		form{	
			width: 40%;
			margin-right: auto;
			margin-left: auto;
			padding: 10px;	
			border: solid;
			border-radius: 1.2em;
			background-color: rgba(234,179,168,0.2);
			padding-left: 4%;
			margin-top: 2%;
		}
		label{
			margin:5px;
			border-radius: 5px;
			border:1.2px #f5c5c5 solid;
			padding: 2px;
			color: black;
			font-weight: bold; 
			width: 22%;
		}
		.sex{
			width: 15%;
		}
		#femme{
			width: 1.5%;

		}
		#homme{
			width: 1.5%;
		}

		textarea{
			background-color: transparent;
			margin-left: 13%;
		}
		input[type=submit]{
			border: solid 1px #e1a3a3;
			border-radius: 0.6em;
			background-color: transparent;
			margin-right: auto;
			margin-left: auto;
			float: right;
			margin-right: 8%;
			float: left;
			margin-left: 25%;
		}
		input[type=reset]{
			border: solid 1px #e1a3a3;
			border-radius: 0.6em;
			background-color: transparent;
			margin-right: auto;
			margin-left: auto;
			float: right;
			margin-right: 8%;
			float: right;
			margin-right: 25%;
			width: 20%;
		}
		body{
			background-color: #fbe7e4;
		}
	</style>