<?php
// affichager une liste de fruits
 class fruit{
    private $nom; // attribut de la classe/ private= accessible uniquement dans la classe,de pouvoir protéger les attributs de la classe
    private $prix;
    private $poids;

    public function __construct($nom,$poids){//construc : permet de créer un objet
        $this->nom=$nom;
        $this->poids=$poids;
        $this->prix=getPrixFruits($nom);
       
    }
 }
?>