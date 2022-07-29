<h1>Tableaux</h1>
<h2>Etape 1 </h2>
Réaliser un tableau contenant les valeurs : 2,6,12,5,26,34,40,60
<h2>Etape 2 </h2>
Réaliser une fonction qui vérifie si un tableau ne contient que des valeurs paires ou non
<h2>Etape 3 </h2>
Afficher un message pour l'indiquer à l'utilisateur

<?php 
    $tab = [2,6,12,6,25,34,40,60];

    echo "<h2> Résultat : </h2>";
    if(checkTableau($tab)){//SI true, c'est paire
        echo "Le tableau ne contient que des valeurs paires";
    } else {
        echo "Le tableau contient des valeurs impaires";//Si false, impaires
    }

    function checkTableau($tableau){// La fonction va permettre de renvoyer true si le tableau n'a que des valeurs paires et false s'il n'a pas que des valeurs paire
        for($i = 0; $i <= count($tableau)-1 ; $i++){//on commence à l'indice  0 du tableau et non 1, on va ainsi parcourir le tableau grâce à count 
            if($tableau[$i] % 2 !== 0){
                return false;
            }
        }
        return true;
    }
?>