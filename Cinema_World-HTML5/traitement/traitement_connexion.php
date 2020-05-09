<?php
<<<<<<< HEAD
require('../modele/modele_connexion.php');
require('../manager/manager_connexion.php');

$connexion = new connexion($_POST['mail'], $_POST['mdp']);
$manager=new Manager();
$manager->connexion($connexion);

var_dump($connexion);
=======
session_start();
require_once('../modele/modele_connexion.php');
require_once('../manager/manager_connexion.php');



$connexion = new connexion(['mail'=>$_POST['mail'],'mdp'=>$_POST['mdp']]);
$manager = new manager_connexion();
$manager->connexion($connexion);



>>>>>>> 1b7b164d67a734d284e04b12a2d3816d67a2e3d2
?>
