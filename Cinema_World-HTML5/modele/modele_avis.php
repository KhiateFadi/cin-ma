<?php
class avis{
  private $_pseudo;
  private $_commentaire;



public function __construct($pseudo,$commentaire){
  $this->setPseudo($pseudo);
  $this->setCommentaire($commentaire);

}

public function setPseudo($pseudo){
  //if(empty($pseudo)){

  //}
//else {
  $this->_pseudo = $pseudo ;
}


public function setCommentaire($commentaire){
//  if(empty($commentaire)){

//  }
//else {
  $this->_commentaire = $commentaire ;

}



public function getPseudo(){
  return $this->_pseudo;
}
public function getCommentaire(){
  return $this->_commentaire;
}


}




 ?>
