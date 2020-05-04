<?php

require('../modele/modele_inscription.php');
require('../manager/manager_inscription.php');

$inscription = new inscription($_POST['mail'], $_POST['mdp'], $_POST['num']);
$manager = new Manager_inscription();
$manager->inscription($inscription);

?>

	<a href="../index.html">Accueil</a>
