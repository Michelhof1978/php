<?php 
class Fruit{
    private $nom;// attribut de la classe/ private= accessible uniquement dans la classe,de pouvoir protéger les attributs de la classe
    private $poids;
    private $prix;

    const POMME = "pomme";//const = constante, la valeur ne pourra pas être modifiée//Les constantes sont sensibles à la casse(qu'il y est une majuscule ou pas). Par convention, les constantes sont toujours en majuscule.
    const CERISE = "cerise";

    const POMMEIMG = "apple.png";
    const CHERRYIMG = "cherry.png";

    public function __construct($nom,$poids){//construct : permet de créer un objet
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $this->getPrixFruits($nom);//on appelle la fonction ci dessous qui permet de retourner le prix des fruits
    }

    public function getNom(){
        return $this->nom;
    }

    private function getPrixFruits($nom){
        if($nom === self::POMME){//self = élément lui même
            return 15;
        } else if($nom === self::CERISE){
            return 20;
        }
    }

    public function __toString(){//__toString : permet de retourner une chaine de caractère
        
        
        $affichage = $this->getAffichageIMG();
        $affichage .= "Nom : " . $this->nom . "<br />";
        $affichage .= "Poids : " . $this->poids . "<br />";
        $affichage .= "Prix : " . $this->prix . "<br />";
        return $affichage;
    }

    private function getAffichageIMG(){
        if($this->nom === self::POMME){
            return "<img src ='images/".self::POMMEIMG."' alt='image pomme' /> <br/>";
        } else if ($this->nom === self::CERISE){
            return "<img src ='images/".self::CHERRYIMG."' alt='image cerise' /><br/>";
        }
    }

}

?>