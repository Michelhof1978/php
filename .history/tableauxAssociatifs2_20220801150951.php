<?php//pour afficher les pesonnages
$p1 = [
        "Nom" => "Luke",
        "Img" => "player.png",
        "Age" => 27,
        "Sexe" => true,
        "Force" => 5,
        "Agilite" =>4
    ];
    $p2 = [
        "Nom" => "Katy",
        "Img" => "playerF.png",
        "Age" => 22,
        "Sexe" => false,
        "Force" => 3,
        "Agilite" =>6
    ];
    $p3 = [
        "Nom" => "Marc",
        "Img" => "playerM.png",
        "Age" => 33,
        "Sexe" => true,
        "Force" => 7,
        "Agilite" =>2
    ];

    $persos = [$p1,$p2,$p3];// déclaration d'un nouveau tableau (tableau de tableau = tableaux associatifs)
?>

<h2> Personnage : </h2>
<?php 
    foreach$persos as $perso{//on va parcourir le tableau $persos et stocker les infos ds $perso
        echo "<div class='gauche'>";
            echo "<img src = 'images/".$perso['Img']."' alt = '".$perso['Img']."' />";
        echo "</div>";
        echo "<div class='gauche'>";
            afficherPerso($perso);//Affichage de chaque personnage à chaque tour de boucle
        echo "</div>";
        echo "<div class='clearB'></div>";
    }

    function afficherPerso($personnage){
        foreach($personnage as $index => $value){
            if($index !== "Img" && $index !== "Sexe"){//si on est sur img ou sexe, ne pas afficher
                echo "<b>".$index."</b> : ". $value . "<br/>";
            }
            if($index === "Sexe"){
                echo "<b>Sexe</b> :";
                if($value){//Si le sexe est masculin(true)
                    echo "Homme <br/>";
                } else {//sinon c'est une femme, false
                    echo "Femme <br/>";
                }
            }
        }
    }
?>