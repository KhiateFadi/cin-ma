<?php

Class manager_connexion{

public function connexion($donnee){
        $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');

        $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE mail = :mail AND mdp = :mdp');
        $a = $req->execute(array('mail'=>$donnee->getMail(), 'mdp'=>$donnee->getMdp()));





      header('Location: ../index.html');


}
}

?>
