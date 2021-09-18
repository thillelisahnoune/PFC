<?php 
// Admin : 
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=tadecodz','root',''); 
$pseudo_par_defaut="admin";
$mdp_par_defaut="admin";
if (isset($_POST['cnx'])) { // Si il a valider 
	if ((!empty($_POST['pseudo']))&&(!empty($_POST['mdp']))) {  // Si les champs ne sont pas vide 	
		$pseudo_saisi     =htmlspecialchars($_POST['pseudo']); // Recupere le pseudo saisi et eviter les chars speciaux
		$mdp_saisi        =sha1($_POST['mdp']);    // Recupere le mdp saisi

		// Si c un admin ?
		if ("admin"==$pseudo_saisi && sha1($_POST['mdp'])==$mdp_saisi) { // Si le pseudo et le mdp sont valide
			$_SESSION['pseudo']=$pseudo_saisi;
			header('Location: admin.php');		
		}else{ 
			// Si ce n'est pas un admin ?
			$utilisateur=$bdd->query("SELECT  mail, mdp from utilisateur");
			$trouv=false;
			while ($tuple=$utilisateur->fetch()) { // TQ il ya des tuples a parcourire 
				if ($_POST['pseudo']==$tuple['mail']&&sha1($_POST['mdp'])==$tuple['mdp']) { // Chercher l'utilisateur 
				$trouv=true; //Si on le trouve on sort de la recherche 
				break;		
			} 	
			}  // Parcourire la bdd

			if ($trouv==true) { // Si on a trouver un utilisateur
				header("Location:utilisateur.php");  // Redirige vers l'espace user
				$_SESSION["Connected"]=true;
				$_SESSION["mail"]=$_POST["mail"];
			}else{
				$_SESSION["Connected"]=false;
				// header("Location:inscription.php");
				?>
				<script type="text/javascript">alert('Veuillez introduire les champs correctement SVP !');</script>
				<?php
				
			}
		}
	}else{ // champs vide
		echo "<script type=\"text/javascript\">alert('Veuillez remplire tout les champs SVP !');</script>"; // Si un champs est vide
		// header('index1.php');
	}  //message champs vide
}  // bouton
?>
<form class="formul" action="connexion.php" method="POST" autocomplete="off">	
	<legend><b>Connexion :</b></legend> <br>
	<label for="pseudo">Nom d'utilisateur :</label>
	<input type="text" name="pseudo" id="pseudo"> <br> <br>

	<label for="mdp">Mot de passe :</label>
	<input type="password" name="mdp" id="mdp"> <br> <br>

	<input type="submit" name="cnx" id="cnx" value="Connecter"> <br> <br> 
	<a href="inscription.php">S'inscrire</a>

</form>

<style type="text/css">
	form{	
		width: 40%;
		padding: 10px;	
		border: solid;
		border-radius: 1.2em;
		background-color: rgba(234,179,168,0.5);
		margin-left: 42%;
		margin-bottom: 5%;
	}
	legend{
		font-size: 18px;
		font-weight: bold;
		text-align: center;

	}
	label{
		margin:5px;
		border-radius: 5px;
		border:1.2px #f5c5c5 solid;
		padding: 2px;
		color: black;
		font-weight: bold; 
		width: 30%;
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
		background-color: #e1a3a3;
		margin-right: auto;
		margin-left: auto;
		float: right;
		margin-right: 8%;
	}
</style>