<?php 
session_start(); 
$bdd=new PDO('mysql:host=localhost;dbname=tadecodz','root','');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Afficher les utilisateurs</title>
	<meta charset="utf-8"> 	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="imag/logo.png">
</head>
<body>
	<?php include('heder.php'); ?>
	<div class="container" style="min-height: 65vh;">
		<br>
		<table>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Tel</th>
			<?php 
			$recupUsers=$bdd->query('SELECT * FROM utilisateur');
			while ($user=$recupUsers->fetch()) {
				echo  '	<tr>
				<td>'.$user['nom'].'</td>
				<td>'.$user['prenom'].'</td>
				<td>'.$user['tel'].'</td>						
				</tr>';
			}
			?>
		</table> 
	</div>
	<?php include('foter.php'); ?>	
</body>
</html>
<style type="text/css">
body{
	background-color: #fbe7e4; 
}	
	table{
		border-collapse: collapse;
		border:solid 2px #e1a3a2;
		margin-left: -200px;
		position: relative;
		left: 50%;
		margin-top: 2%; 
		text-align: center;
	}
	td{
		border-bottom: solid 2px #e1a3a2;
		width: 150px;
		text-align: center;
	}
	th{
		background-color: #e1a3a2;
		color: black;
	}
	
</style>