<?php

require('../modele/modele_connexion.php');
require('../manager/manager_connexion.php');




$connexion = new connexion(['mail'=>$_POST['mail'], 'mdp'=>$_POST['mdp']]);
$manager = new manager_connexion();
$manager->connexion($connexion);


?>
