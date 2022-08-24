<?php
class Panier{
    private static $prochainIdentifiant = 1; // identifiant unique pour chaque panier, à chaque panier on ajoutera 1 à l identifiant, cela permettre d avoir un identifiant unique pour tous les paniers

    private $identifiant;//identifiant du panier pour pouvoir avoir plusieurs paniers et être idenfié par son numéro
    private $pommes = [];
    private $cerises = [];

    public function __construct(){// constructeur de la classe panier
        $this->identifiant = self::$prochainIdentifiant;// on affecte à l identifiant du panier le prochain identifiant unique
        self::$prochainIdentifiant ++;// on augmente le prochain identifiant unique pour chaque panier
    }

    public function addFruit($fruit){
        if($fruit->getNom() === Fruit::POMME){
            $this->pommes[] = $fruit;
        } else if($fruit->getNom() === Fruit::CERISE){
            $this->cerises[] = $fruit;
        }
    }

    public function getIdentifiant(){
        return $this->identifiant;
    }

    public function __toString(){
        $affichage = "Voici le contenu du panier " . $this->identifiant ." : <br/>";
        foreach($this->pommes as $pomme){
            $affichage .= $pomme;
        }
        foreach($this->cerises as $cerise){
            $affichage .= $cerise;
        }
        return $affichage;
    }
}
?>