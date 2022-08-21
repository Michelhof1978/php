<?php
// affichager une liste de fruits
 class fruit{
    private $nom; 
    private $prix;
    private $poids;

    public function __construct($nom,$poids){
        $this->nom=$nom;
        $this->poids=$poids;
        $this->prix=getPrixFruits($nom);//on appelle la fonction ci dessous qui permet de retourner le prix des fruits
       
    }
    public function getPrixFruits(){
        return $this->prix;
    }
 }
?>