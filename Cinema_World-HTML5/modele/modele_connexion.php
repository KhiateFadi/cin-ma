<?php
<<<<<<< HEAD
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
  return $this->_mail;
}
=======
require_once('../manager/manager_connexion.php');
Class connexion{

    public $mail;
    public $mdp;

    public function __construct($donnees){
    $this->hydrate($donnees);
  }

  public function hydrate($donnees){
    foreach($donnees as $key => $value){
          $method = 'set'.ucfirst($key);
          if(method_exists($this,$method)){
            $this->$method($value);
          }
    }

  }

    public function getMail(){ return $this->mail; }
    public function getMdp(){ return $this->mdp; }

    public function setMail($mail){
        $this->mail = $mail;
        echo $mail;
    }
>>>>>>> 1b7b164d67a734d284e04b12a2d3816d67a2e3d2


public function getMdp(){
  return $this->_mdp;
}
}




 ?>
