<?php
class contact{
  private $_nom;
  private $_mail;
  private $_message;


public function __construct($nom,$mail,$message){
  $this->setNom($nom);
  $this->setMail($mail);
  $this->setMessage($message);

}

public function setNom($nom){


//  }
//else {
  $this->_nom = $nom ;

}

public function setMail($mail){

  $this->_mail = $mail ;
}

public function setMessage($message){
  //if(empty($num)){

  //}
//else {
  $this->_message = $message ;
}




public function getNom(){
  return $this->_nom;
}
public function getMail(){
  return $this->_mail;
}
public function getMessage(){
  return $this->_message;
}

}




 ?>
