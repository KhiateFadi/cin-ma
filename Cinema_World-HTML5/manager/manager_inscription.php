<?php

Class Manager_inscription{

public function inscription($donnee){
        $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');

        $req = $bdd->prepare('INSERT INTO utilisateurs(mail, mdp, num) VALUES(:mail, :mdp, :num)');
        $a = $req->execute(array('mail'=>$donnee->getMail(), 'mdp'=>$donnee->getMdp(),'num'=>$donnee->getNum()));

        



      header('Location: ../index.html');


}
}

?>
