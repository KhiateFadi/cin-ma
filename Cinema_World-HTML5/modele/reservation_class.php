<?php
class reservation{
  private $_nom;
  private $_film;
  private $_nb_place;
  private $_3d;

public function __construct($nom,$film,$nb_place,$_3d){
  $this->setNom($nom);
  $this->setFilm($film);
  $this->setNb_place($nb_place);
  $this->set3d($_3d);
}

public function setNom($nom){
//  if(empty($nom)){

//  }
//else {
  $this->_nom = $nom ;

}

public function setNb_place($nb_place){
  //if(empty($nb_personne)){

  //}
//else {
  $this->_nb_place = $nb_place ;
}

public function setFilm($film){
  //if(empty($mail)){

  //}
//else {
  $this->_film = $film ;
}

public function set3d($_3d){
  //if(empty($heure)){

  //}
//else {
  $this->_3d = $_3d ;
}


public function getNom(){
  return $this->_nom;
}
public function getFilm(){
  return $this->_film;
}
public function get3d(){
  return $this->_3d;
}
public function getNb_place(){
  return $this->_nb_place;
}
}




 ?>
