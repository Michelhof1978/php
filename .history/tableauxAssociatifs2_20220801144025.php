<?php
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

    $persos = [$p1,$p2,$p3];
?>

<h2> Personnage : </h2>
<?php 
    foreach($persos as $perso){
        echo "<div class='gauche'>";
            echo "<img src = 'sources/images/".$perso['Img']."' alt = '".$perso['Img']."' />";
        echo "</div>";
        echo "<div class='gauche'>";
            afficherPerso($perso);
        echo "</div>";
        echo "<div class='clearB'></div>";
    }

    function afficherPerso($personnage){
        foreach($personnage as $index => $value){
            if($index !== "Img" && $index !== "Sexe"){
                echo "<b>".$index."</b> : ". $value . "<br/>";
            }
            if($index === "Sexe"){
                echo "<b>Sexe</b> :";
                if($value){
                    echo "Homme <br/>";
                } else {
                    echo "Femme <br/>";
                }
            }
        }
    }
?>