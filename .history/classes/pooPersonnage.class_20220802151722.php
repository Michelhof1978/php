<?php
class Personnage{
    private static $personnages = [];// cette information là sera dispo depis la class elle même

    private $nom;//Propriétés ou attributs des classes
    private $img;
    private $age;//private = sera accéssible de nul part, si ce n'est de la class elle même // public = accécible n'importe où par n'importe qui
    private $sexe;
    private $force;
    private $agilite;

    const HOMME = true;//Une constante de class est un identifiant (un nom) qui représente une valeur simple. Comme son nom le suggère, cette valeur ne peut jamais être modifiée durant l'exécution du script (sauf les constantes magiques). Les constantes sont sensibles à la casse. Par convention, les constantes sont toujours en majuscule.//Ici our appeler une constante ds la classes = nom de la class(personnage):: HOMME
    const FEMME = false;//Les constantes de class servent à mettre des noms sur des choses qui n'en n'ont pas// Pour savoir ce qui est true(homme) ou false(femme)

    const FORCE_MAX = 6;//idem, un chiffre, ce n'est pas un nom, on ne sais pas ce que sait d'où l'utilité des constantes
    const FORCE_MED = 5;
    const FORCE_MIN = 4;

    const AGILITE_MAX = 6;
    const AGILITE_MED = 5;
    const AGILITE_MIN = 4;

    function __construct($nom,$img,$age,$sexe,$force,$agilite){
        //construc permet de donner les infos à notre personnage
        //Un constructeur vous permet d'initialiser les propriétés d'un objet lors de la création de l'objet.
//Si vous créez une __construct()fonction, PHP appellera automatiquement cette fonction lorsque vous créerez un objet à partir d'une classe.
//Notez que la fonction de construction commence par deux traits de soulignement (__) !
        $this->nom = $nom;//$this fait référence à l'objet lui même, de l'attribut ou propriété
        $this->img = $img;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
        self::$personnages[] = $this;
    }

    function getNom(){return $this->nom;}// Le getter ( getNom() )va retourner les infos(valeurs) de l'attribut "nom" pour lequel on aura besoins d'y accéder sinon, ça sera le setter ( setNom() ) pour modifier l'infos du Nom
    function getImg(){return $this->img;}
    function getAge(){return $this->age;}
    function getSexe(){return $this->sexe;}
    function getForce(){return $this->force;}
    function getAgilite(){return $this->agilite;}

    function setNom($nom){$this->nom=$nom;}
    function setImg($img){$this->img=$img;}
    function setAge($age){$this->age=$age;}

    public function afficherMesInfos(){//Affichage infos du personnage
        echo "<b>Nom : </b>" . $this->nom ."<br/>";
        echo "<b>Age : </b>" . $this->age ."<br/>";
        echo "<b>Sexe</b> :";
        if($this->sexe){
            echo "Homme <br/>";
        } else {
            echo "Femme <br/>";
        }
        echo "<b>Force : </b>" . $this->force ."<br/>";
        echo "<b>Agilite : </b>" . $this->agilite ."<br/>";
    }

    public function afficherMesInformationsTemplate(){//Affichage image
        echo "<div class='gauche'>";
            echo "<img src = 'images/".$this->img."' alt = '".$this->img."' />";
        echo "</div>";
        echo "<div class='gauche'>";
        $this->afficherMesInfos();//Pour appeler une fonction ds une fonction, toujours utiliser $this
        echo "</div>";
        echo "<div class='clearB'></div>";
    }

    public function getListePersonnage(){
        return self::$personnages;
    }
}
?>