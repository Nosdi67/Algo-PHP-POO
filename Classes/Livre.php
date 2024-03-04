<?php

class Livre{


private string $_nomLivre;
private int $_année;
private int $_prix;
private int $_nbDePages;
private Auteur $_auteur;


    public function __construct(Auteur $_auteur,string $_nomLivre, int $_année, int $_nbDePages, int $_prix){

        $this->_auteur= $_auteur;
        $this->_nomLivre = $_nomLivre;
        $this->_année = $_année;
        $this->_nbDePages = $_nbDePages;
        $this->_prix = $_prix;
        $this->_auteur->addLivres($this); /* on dis que l'attribut auteur va stocker les livres et 
                                            le this va justement chercher les objets Livres qu'on a*/
        
    }

//*************************************GETTERS**************************************************************

    
    public function getNom() {return $this->_nomLivre;}

	
    public function getNbDePages() {return $this->_nbDePages;}

	
    public function getPrix() {return $this->_prix;}

    
    public function getAnnée() {return $this->_année;}

    
    public function getAuteur(): Auteur {return $this->auteur;}

    
    public function getInfo(){ //un get info pour tout recuperer s'il faut
        
    return $this->_nomLivre. " (" . $this->_année. ") : ". $this->_nbDePages." pages / " . $this->_prix . "€" .'<br>' ;}

    
    
    
//**********************************************SETTERS**************************************************************************************
   
    public function setNomLivre(string $_nomLivre): void {$this->_nomLivre = $_nomLivre;}

	public function setPrix(int $_prix): void {$this->_prix = $_prix;}

	public function setNbDePages(int $_nbDePages): void {$this->_nbDePages = $_nbDePages;}

	public function setAuteur(Auteur $auteur): void {$this->auteur = $auteur;}

   

//***********************to String************************************
 public function __toString(){

        return $this->_nomLivre. " (" . $this->_année. ") : ". $this->_nbDePages." pages / " . $this->_prix . "€" .'<br>' ;
 }    // to string pour renvoyer tout ces info d'un coup lors de l'appel via $this
}
	




?>