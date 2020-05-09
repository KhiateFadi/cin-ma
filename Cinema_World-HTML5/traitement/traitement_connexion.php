<?php
<<<<<<< HEAD
=======

>>>>>>> 19c9a922dd1bcf974935d49b5c53c2db9d32013c
require('../modele/modele_connexion.php');
require('../manager/manager_connexion.php');

$connexion = new connexion($_POST['mail'], $_POST['mdp']);
$manager=new Manager();
$manager->connexion($connexion);

<<<<<<< HEAD
var_dump($connexion);
=======
>>>>>>> 19c9a922dd1bcf974935d49b5c53c2db9d32013c
?>
