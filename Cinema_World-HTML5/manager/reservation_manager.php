<?php

Class Manager{

public function reservation($jul){
        $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8','root','');

        $req = $bdd->prepare('INSERT INTO reservation(nom, film, nb_place, 3d) VALUES(:nom, :film, :nb_place, :3d)');
        $a = $req->execute(array('nom'=>$jul->getNom(), 'film'=>$jul->getFilm(),
        'nb_place'=>$jul->getNb_place(), '3d'=>$jul->get3d()));
        var_dump($a);



      header('Location: ../index.html');


}
}

?>
