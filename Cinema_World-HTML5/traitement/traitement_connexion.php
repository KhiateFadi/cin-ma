<?php
session_start();
require_once('../modele/modele_connexion.php');
require_once('../manager/manager_connexion.php');



$connexion = new connexion(['mail'=>$_POST['mail'],'mdp'=>$_POST['mdp']]);
$manager = new manager_connexion();
$manager->connexion($connexion);



?>
