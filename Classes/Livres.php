<?php

class Livre{

private string $_auteur;
private string $_nom;
private $_année=new DateTime();
private int $_nbDePages;
private int $_prix;


    public function __construct(Auteur $_auteur, string $_nom, int $_nbDePages, int $_prix, $_année)
    
    {$this->_nom = $_nom;
    $this->_nbDePages = $_nbDePages;
    $this->_prix = $_prix;
    $this->_année=$_année;}
	


    public function getNom() {return $this->_nom;}

	public function getNbDePages() {return $this->_nbDePages;}

	public function getPrix() {return $this->_prix;}

    public function getAnnée() {return $this->_année->format("Y");}

    public function getInfo(){

        return $this->_auteur .$this->_nom. $this->_année. $this->_nbDePages. $this->_prix. $this->_année  ;
    }
}

?>