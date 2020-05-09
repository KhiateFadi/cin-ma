<?php
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

    public function setMdp($mdp){
        $this->mdp = sha1($mdp);
    }

}
