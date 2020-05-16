<?php

Class manager_avis{

public function avis($donnee){
        $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');

        $req = $bdd->prepare('INSERT INTO avis(pseudo, commentaire) VALUES(:pseudo, :commentaire)');
        $a = $req->execute(array('pseudo'=>$donnee->getPseudo(), 'commentaire'=>$donnee->getCommentaire()));





      header('Location: ../index.html');


}
}

?>
