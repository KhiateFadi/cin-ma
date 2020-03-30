<?php
class inscription{
  private $_mail;
  private $_mdp;
  private $_num;


public function __construct($mail,$mdp,$num){
  $this->setMail($mail);
  $this->setMdp($mdp);
  $this->setNum($num);

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

public function setNum($num){
  //if(empty($num)){

  //}
//else {
  $this->_num = $num ;
}




public function getMail(){
  return $this->_mail;
}
public function getMdp(){
  return $this->_mdp;
}
public function getNum(){
  return $this->_num;
}

}




 ?>
