<?php

require('../modele/modele_avis.php');
require('../manager/manager_avis.php');

$avis = new avis($_POST['pseudo'], $_POST['commentaire']);
$manager = new Manager_avis();
$manager->avis();

?>

	<a href="../index.html">Accueil</a>
