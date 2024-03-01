<?php


class Auteur{

    private $_auteur;

public function __construct($_auteur){

    $this->_auteur=$_auteur; 
}  
    
public function getAuteur() {
    
    return $this->_auteur;

}

}
?>


