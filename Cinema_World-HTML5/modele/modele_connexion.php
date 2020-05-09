<?php
<<<<<<< HEAD
=======

>>>>>>> 19c9a922dd1bcf974935d49b5c53c2db9d32013c
class connexion{
  private $_mail;
  private $_mdp;

public function __construct($mail,$mdp){
  $this->setMail($mail);
  $this->setMdp($mdp);
}

public function setMail($mail){
  //if(is_string ($nom)){
$this->_mail = $mail ;
  //}
//else {
  //echo"t nul";
//}
}


public function setMdp($mdp){
//  if(is_int ($tel)){
$this->_mdp = $mdp;
  //}
////echo"t nul";
//}
}

public function getMail(){
  return $this->_Mail;
}
<<<<<<< HEAD


=======
>>>>>>> 19c9a922dd1bcf974935d49b5c53c2db9d32013c
public function getMdp(){
  return $this->_mdp;
}
}
 ?>
