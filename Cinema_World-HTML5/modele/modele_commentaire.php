<?php
class commentaire{
  private $_pseudo;
  private $_commentaire;
  private $_id_article;



public function __construct($pseudo,$commentaire,$id_article){
  $this->setPseudo($pseudo);
  $this->setCommentaire($commentaire);
  $this->setId_article($id_article);


}

public function setPseudo($pseudo){
//  if(empty($mail)){

//  }
//else {
  $this->_pseudo = $pseudo ;

}

public function setCommentaire($commentaire){
  //if(empty($mdp)){

  //}
//else {
  $this->_commentaire = $commentaire ;
}

public function setId_article($id_article){
  //if(empty($mdp)){

  //}
//else {
  $this->_id_article = $id_article ;
}



public function getPseudo(){
  return $this->_pseudo;
}
public function getCommentaire(){
  return $this->_commentaire;
}
public function getId_article(){
  return $this->_id_article;
}
}




 ?>
