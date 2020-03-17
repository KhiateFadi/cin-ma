<?php
require_once('../traitement/traitement_inscription.php');
class manager_inscription{


  public function inscription(inscription $donnee){

    try {
      $bdd =  new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');
    } catch (Exception $e) {
       die('Erreur:'.$e->getMessage());
    }

  $req = $bdd->prepare('INSERT INTO inscription (mail,mdp,num) VALUES (:mail,:mdp,:num)');
  $b = $req->execute(array('mail'=>$donnee->getMail(),'mdp'=>md5($donnee->getMdp()),'num'=>$donnee->getNum()));



  }

}
?>
