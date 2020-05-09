<?php
<<<<<<< HEAD
//session_start();
=======

require_once('../modele/modele_connexion.php');
require_once('../traitement/traitement_connexion.php');
>>>>>>> 1b7b164d67a734d284e04b12a2d3816d67a2e3d2

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

<<<<<<< HEAD
     }
     else{
         header('location: ../vue/moncompte.hmtl');
     }
 }
=======
  public function connexion($connexion){
  $bdd= new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');
  $reponse=$bdd->prepare('SELECT * FROM utilisateur WHERE mail=:mail AND mdp=:mdp');
  $reponse->execute(array(
  'mail'=>$connexion->getMail(),
  'mdp'=>$connexion->getMdp()));
  $donnee=$reponse->fetch();
  var_dump($connexion);
>>>>>>> 1b7b164d67a734d284e04b12a2d3816d67a2e3d2




<<<<<<< HEAD
  public function afficheUser($id){
  $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');

=======
        }
>>>>>>> 1b7b164d67a734d284e04b12a2d3816d67a2e3d2

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
