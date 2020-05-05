<?php
session_start();
require_once('../traitement/traitement_connexion.php');
Class manager_connexion{

public function connexion($donnee){

        $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');

        $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE mail = :mail AND mdp = :mdp');
        $req = execute(array('mail'=>$donnee->getMail(), 'mdp'=>$donnee->getMdp()));
        $c = $req->fetch();
        if ($c == true) {

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
