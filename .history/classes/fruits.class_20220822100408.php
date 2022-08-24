<?php 
class Fruit{//toujours mettre une majuscule pour les noms de classes
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

    public function getNom(){//getNom : permet de retourner le nom du fruit, obligation d'utiliser un GETTER
        return $this->nom;
    }

    private function getPrixFruits($nom){
        if($nom === self::POMME){//self = élément lui même
            return 15;
        } else if($nom === self::CERISE){
            return 20;
        }
    }

    public function __toString(){//__toString : permet de retourner une chaine de caractère,La fonction __toString() renvoie le contenu de chaîne d'un élément. Cette fonction renvoie le contenu de la chaîne qui se trouve directement dans l'élément - et non le contenu de la chaîne qui se trouve à l'intérieur des enfants de cet élément !
        //On peut faire un echo sur un objet si on affiche --toString sinon, il affichera une erreur
        //Les méthodes suivantes sont considérées magiques : __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state() __clone(), et __debugInfo().
        
        $affichage = $this->getAffichageIMG();
        $affichage .= "Nom : " . $this->nom . "<br />";
        $affichage .= "Poids : " . $this->poids . "<br />";
        $affichage .= "Prix : " . $this->prix . "<br />";
        return $affichage;
    }

    private function getAffichageIMG(){//fonction pour afficher image
        if($this->nom === self::POMME){//si le nom est pomme, on affiche l'image pomme
            return "<img src ='images/".self::POMMEIMG."' alt='image pomme' /> <br/>";
        } else if ($this->nom === self::CERISE){
            return "<img src ='images/".self::CHERRYIMG."' alt='image cerise' /><br/>";
        }
    }

}

?>