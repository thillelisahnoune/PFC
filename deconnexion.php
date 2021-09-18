<?php 
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=espace_membre','root','');
$_SESSION=array();
session_destroy();
header('Location:index1.php');
?>