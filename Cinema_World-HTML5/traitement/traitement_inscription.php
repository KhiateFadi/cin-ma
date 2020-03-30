<?php



require_once('../modele/modele_inscription.php');
require_once('../manager/manager_inscription.php');
if(empty($_POST['mail']) or (empty($_POST['mdp'])) or (empty($_POST['num']))){
  echo "formulaire incomplet";

}
else{



  $inscription = new inscription($_POST['mail'],$_POST['mdp'],$_POST['num']);
  $manager_inscription = new manager_inscription();
  $manager_inscription->inscription($inscription);


		 }
  echo "bravo vous etes inscrit";




?>
	<a href="../index.html">Accueil</a>
