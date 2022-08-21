<?php 
class Fruit{
    private $nom;
    private $poids;
    private $prix;

    const POMME = "pomme";
    const CERISE = "cerise";

    const POMMEIMG = "apple.png";
    const CHERRYIMG = "cherry.png";

    public function __construct($nom,$poids){
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $this->getPrixFruits($nom);
    }

    public function getNom(){
        return $this->nom;
    }

    private function getPrixFruits($nom){
        if($nom === self::POMME){
            return 15;
        } else if($nom === self::CERISE){
            return 20;
        }
    }

    public function __toString(){
        $affichage = $this->getAffichageIMG();
        $affichage .= "Nom : " . $this->nom . "<br />";
        $affichage .= "Poids : " . $this->poids . "<br />";
        $affichage .= "Prix : " . $this->prix . "<br />";
        return $affichage;
    }

    private function getAffichageIMG(){
        if($this->nom === self::POMME){
            return "<img src ='sources/images/".self::POMMEIMG."' alt='image pomme' /> <br/>";
        } else if ($this->nom === self::CERISE){
            return "<img src ='sources/images/".self::CHERRYIMG."' alt='image cerise' /><br/>";
        }
    }

}

?>