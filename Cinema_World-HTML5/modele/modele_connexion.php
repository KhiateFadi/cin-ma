<?php

class connexion{
  private $_mail;
  private $_mdp;



public function __construct($mail,$mdp){
  $this->setMail($mail);
  $this->setMdp($mdp);


}

public function setMail($mail){
//  if(empty($mail)){

//  }
//else {
  $this->_mail = $mail ;

}

public function setMdp($mdp){
  //if(empty($mdp)){

  //}
//else {
  $this->_mdp = $mdp ;
}


public function getMail(){
  return $this->_mail;
}
public function getMdp(){
  return $this->_mdp;
}
}




 ?>
