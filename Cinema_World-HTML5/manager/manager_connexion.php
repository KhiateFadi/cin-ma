<?php

session_start();


require_once('../modele/modele_connexion.php');
require_once('../traitement/traitement_connexion.php');


Class Manager{

  public function connexion($connex){
          $bdd= new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');
          $reponse=$bdd->prepare('SELECT * FROM utilisateurs WHERE mail=:mail AND mdp=:mdp');
          $reponse->execute(array(
          'mail'=>$connex->getMail(),
          'mdp'=>$connex->getMdp()));
          $donne=$reponse->fetch();

  if ($donne['mail'] == $connex->getMail() && $donne['mdp'] == $connex->getMdp()){
         $_SESSION['nom'] = $donne['nom'];
         $_SESSION['prenom'] = $donne['prenom'];
header('location: ../vue/admin.php');

     }
     else{
         header('location: ../vue/moncompte.hmtl');
     }
 }







  public function afficheUser($id){
  $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');





$red = $bdd->prepare('SELECT * FROM utilisateurs WHERE id=:id');
$red->execute(array('id'=>$_SESSION['id']));
$c = $red->fetch();
    return $c;
}

  public function admin($all){
  $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');


$red = $bdd->query('SELECT * FROM utilisateurs');
$d = $red->fetchall();
    return $d;

  }
  public function reserv($res){
  $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');


$red = $bdd->query('SELECT * FROM reservation');
$r = $red->fetchall();
    return $r;

  }
}

?>
