<?php


class Auteur{

    private $_nom;
    private $_prenom;
    private array $_lipublic 
	vres;

public function __construct($_nom,$_prenom)
{
    $this->_nom=$_nom;
    $this->_prenom=$_prenom;
    $this->_livres=[];
}
 

//*************************************GETTERS**************************************************************


public function getAuteur() {return $this->_nom." ". $this->_prenom ;}





//*******************************SETTER***************************************************

    public function setNom( $_nom): void {$this->_nom = $_nom;}

	public function setPrenom( $_prenom): void {$this->_prenom = $_prenom;}

	public function setLivres(array $_livres): void {$this->_livres = $_livres;}

//*********************************ADDER****************************************************
    
    public function addLivres(Livre $livre){
        
        $this->_livres[]=$_livres;
        array_push($this->_livres, $livre);
    
    }




//********************************ToString***************************************************
    public function __toString() {return $this->_nom . " " . $this->_prenom;}


}
?>


