<?php 
session_start();
$bdd= new PDO('mysql:host=localhost;dbname=tadecodz','root',''); // Declarer la bdd
if (isset($_POST['cmd'])) {
	$nom=$_POST['nom'];
	$sex=$_POST['sex'];
	$theme=$_POST['theme'];
	$date=$_POST['date'];	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>commande</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php  include('heder.php'); ?>
	<fieldset>
		
		<form method="post" action="" autocomplete="off">
			<legend>Commande :</legend>
			<label for="nom">Nome</label>
			<input type="text" name="nom" id="nom" placeholder="Nom a personaliser"> <br> <br>

			<label>Sexe</label>

			<input type="radio" name="femme" id="femme">
			<label for="femme" class="sex">Feminin</label>
			<input type="radio" name="femme" id="homme">
			<label for="homme" class="sex">Masculin</label> <br> <br>

			<label for="theme">Thème</label>
			<input type="text" name="theme" id="nom"> <br><br>

			<label for="date">Date d'évenement</label>
			<input type="date" name="date" id="date" value=""> <br><br>
			<legend>Articles </legend>
			<table>

				<th>Article</th>
				<th>Prix DA</th>
				<th>Quantité</th>
				<tr>
					<td>Goblet</td>
					<td>80</td>
					<td><input type="number" name="qnt" id="nompers" value="0"></td>				
				</tr>
				<tr>
					<td>Paille</td>
					<td>30</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Assiette</td>
					<td>50</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Fourchette</td>
					<td>30</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Serviette</td>
					<td>50</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Boite a popcorne</td>
					<td>80</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Pic cupcake</td>
					<td>30</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Brochette bonbon</td>
					<td>30</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Boite a bonbon</td>
					<td>150</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Sachet a bonbon</td>
					<td>50</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Sac de remerciement</td>
					<td>180</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Couvre bouteille</td>
					<td>40</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Couvre canette</td>
					<td>50</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Guirlende prénom</td>
					<td>90</td>
					<td><input type="text" name="qnt"></td>
				</tr>
				<tr>
					<td>Guirlende bonne fete</td>
					<td>1200</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Masque</td>
					<td>120</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Chapeau</td>
					<td>100</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Chocolat</td>
					<td>80</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Invitation</td>
					<td>100</td>
					<td><input type="number" name="qnt"></td>
				</tr>
				<tr>
					<td>Ballon</td>
					<td>60</td>
					<td><input type="number" name="qnt"></td>
				</tr>			
			</table> <br>
			<textarea rows="10" cols="40" placeholder="Ajouter des détailles a votre commande"></textarea><br> 


			<input type="submit" name="cmd" value="Commander">
			<input type="reset" name="anl" value="Annuler"> <br> <br> 

		</form>
	</fieldset>
	<br>
	<?php include("foter.php"); ?>
</body>
</html>
<style type="text/css">
	legend{
		text-align: center;
		font-weight: bold;
	}
	form{	
		margin-top: 2%;
		width: 40%;
		margin-right: auto;
		margin-left: auto;
		padding: 10px;	
		border: solid;
		border-radius: 1.2em;
		background-color: rgba(234,179,168,0.2);
		padding-left: 4%;
	}
	label{
		/*background-color: white;*/
		margin:5px;
		border-radius: 5px;
		border:1.2px #f5c5c5 solid;
		/*box-shadow: 1px 1px 4px #1a1430 inset;*/
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
		/*display: block;*/
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
		/*display: block;*/
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