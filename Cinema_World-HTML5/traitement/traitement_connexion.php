<?php
require('../modele/modele_connexion.php');
require('../manager/manager_connexion.php');

$connexion = new connexion($_POST['mail'], $_POST['mdp']);
$manager=new Manager();
$manager->connexion($connexion);

var_dump($connexion);
?>
