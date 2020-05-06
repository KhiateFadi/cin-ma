<?php
session_start();
require_once('../traitement/traitement_connexion.php');

Class manager_connexion{



  public function connexion($connexion){
  $bdd= new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');
  $reponse=$bdd->prepare('SELECT * FROM utilisateur WHERE mail=:mail AND mdp=:mdp');
  $reponse->execute(array(
  'mail'=>$connexion->getMail(),
  'mdp'=>$connexion->getMdp()));
  $donnee=$reponse->fetch();

  if ($donnee['mail'] == $connexion->getMail() && $donnee['mdp'] == $connexion->getMdp()){

          $_SESSION['mail'] = $mail;
          $_SESSION['mdp'] = $mdp;
          header('Location:index.html');


        }
        else {

          header('Location:../moncompte.html');
        }







}
}

?>
