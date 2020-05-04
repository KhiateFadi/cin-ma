<?php

Class manager_contact{

public function contact($donnee){
        $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');

        $req = $bdd->prepare('INSERT INTO contact(nom, mail, message) VALUES(:nom, :mail, :message)');
        $a = $req->execute(array('nom'=>$donnee->getNom(), 'mail'=>$donnee->getMail(),'message'=>$donnee->getMessage()));





      


}
}

?>
