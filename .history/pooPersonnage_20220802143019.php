<?php 

    require_once("classes/pooPersonnage.class.php");//L'expression require_once est identique à require mis à part que PHP vérifie si le fichier a déjà été inclus, et si c'est le cas, ne l'inclut pas une deuxième fois.
?>

<?php
class Personnage{
    private static $personnages = [];

    private $nom;//Propriétés ou attributs des classes
    private $img;
    private $age;//private = sera accéssible de nul part, si c'est de la class elle même // public = accébible n'importe où par n'importe qui
    private $sexe;
    private $force;
    private $agilite;

    const HOMME = true;
    const FEMME = false;

    const FORCE_MAX = 6;
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

    function getNom(){return $this->nom;}
    function getImg(){return $this->img;}
    function getAge(){return $this->age;}
    function getSexe(){return $this->sexe;}
    function getForce(){return $this->force;}
    function getAgilite(){return $this->agilite;}

    function setNom($nom){$this->nom=$nom;}
    function setImg($img){$this->img=$img;}
    function setAge($age){$this->age=$age;}

    public function afficherMesInfos(){//Affichage infos
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