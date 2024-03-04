<?php


class Auteur{

    private $_nom;
    private $_prenom;
    private array $_livres;

public function __construct($_nom,$_prenom,)
{
    $this->_nom=$_nom;
    $this->_prenom=$_prenom;
    $this->_livres= []; // ajout d'un tableau vide 
}
 

//*************************************GETTERS**************************************************************


public function getAuteur() {return $this->_nom." ". $this->_prenom ;}



//*******************************SETTER***************************************************

    public function setNom( $_nom): void {$this->_nom = $_nom;}

	public function setPrenom( $_prenom): void {$this->_prenom = $_prenom;}

	public function setLivres(array $_livres): void {$this->_livres = $_livres;}

//*********************************ADDER****************************************************
    
    public function addLivres(Livre $_livre){ // pour ajouter des livres dans le tableau
        
        $this->_livres[]=$_livre;
        // array_push($this->_livres, $livre);  en gros c'est comme si je viens de faire un push dans un array.
    
    }

//*******************************Afficer Livres*********************

    public function afficherLivres(){  

        $resultat= "<h1> Livres de $this </h1>"; // this psk dans le to string j'ai mis le nom de Stepehn king

        foreach($this->_livres as $_livre){ // pour chauqe livres du tableau, definir comme live.

            $resultat .= $_livre. "<br>"; // renvoyer chaque livres.

        }
        return $resultat;  // afficher les livres, il va afficher ce que j'ai mis dans le toString des livres. càd tout les info.
    }

//********************************ToString***************************************************
    public function __toString() {return $this->_nom . " " . $this->_prenom;}
   // c'est comme un raccourci pour eviter d'ecrire getNom et getPrenom a chaque fois. je mets juste this et apres il affiche ce que j'ai mis ici

}
?>


