<?php 
session_start();
$bdd= new PDO('mysql:host=localhost;dbname=tadecodz','root',''); // Declarer la bdd
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$getid=$_GET['id'];
	$recupArticle=$bdd->prepare('SELECT * FROM article WHERE id=?');
	$recupArticle->execute(array($getid));
	if ($recupArticle->rowCount()>0) {
		$deleteArticle=$bdd->prepare('DELETE FROM article WHERE id=?');
		$deleteArticle->execute(array($getid));
		header('Location: afficher_article.php');	
	}
}
?>
