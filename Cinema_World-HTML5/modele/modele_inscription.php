<?php


require_once('../manager/manager_inscription.php');
class inscription{
  private $_mail;
  private $_mdp;
  private $_num;


public function __construct($donnee){
  $this->hydrate($donnee);

  }

  public function hydrate($donnee){
    foreach($donnee as $key => $value){
      $method = 'set'.ucfirst($key);
      if(method_exists($this,$method)){
        $this->$method($value);
      }
    }
  }

  public function setMail($mail){
  if(empty($mail)){
    header("location:eojif.php");
    return;
  }
  $this->_mail = $mail;
}


public function setMdp($mdp){
  if(empty(md5($mdp))){
    header("location:eojif.php");
    return;
  }
  $this->_mdp=$mdp;
}


public function setNum($num){
  if(empty($num)){
    header("location:eojif.php");
    return;
  }
  $this->_num=$num;
}


public function getMail(){return $this->_mail;}
public function getMdp(){return $this->_mdp;}
public function getNum(){return $this->_num;}


}
?>
