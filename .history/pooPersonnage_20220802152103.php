<?php 
//Suite de l'exercice par rapport aux tableau, nous allons afficher les personnages différemment en créant un objet pour limiter le code
    //Une classe est un moule d'objets
    require_once("classes/pooPersonnage.class.php");//L'expression require_once est identique à require mis à part que PHP vérifie si le fichier a déjà été inclus, et si c'est le cas, ne l'inclut pas une deuxième fois.
?>

<h2> Personnage : </h2>

<?php 
    $p1 = new Personnage("Luke","player.png",27,Personnage::HOMME,Personnage::FORCE_MAX,Personnage::AGILITE_MED);//Personnage:: = pour appeler une constante d'une class qui est ds le fichier pooPersonnage
    $p2 = new Personnage("Katy","playerF.png",25,Personnage::FEMME,Personnage::FORCE_MIN,Personnage::AGILITE_MAX);
    $p3 = new Personnage("Marc","playerM.png",33,Personnage::HOMME,Personnage::FORCE_MED,Personnage::AGILITE_MED);
    $persos = Personnage::getListePersonnage();

    foreach($persos as $perso){
        $perso->afficherMesInformationsTemplate(); 
        echo "<br/>-------------------------------<br/>";
    }
    

?>
