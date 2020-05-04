<?php

require('../modele/modele_connexion.php');
require('../manager/manager_connexion.php');

$connexion = new connexion($_POST['mail'], $_POST['mdp']);
$manager = new manager_connexion();
$manager->connexion($connexion);

?>
