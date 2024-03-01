
<h1><U><strong>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et
leurs auteurs respectifs.</strong></U></h1>

<p>Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un
auteur. Un auteur comporte un nom et un prénom.<p><br>

<p>Une méthode toString() sera appréciée dans chacune de vos classes<p><br>

<p>Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie
complète d’un auteur <p><br>

<?php

spl_autoload_register(function ($class_name) {
    include 'Classes/'. $class_name . '.php';
});


$auteur1= new Auteur("Stepehn King");
$livre1= new Livre($auteur1,"Ca ", " (1986) ", " 1338 pages "," / 20€ ");

echo $auteur1->getAuteur();
echo $livre1->getinfo();


?>