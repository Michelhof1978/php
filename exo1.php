<?php
$separateur = "-";//Nous pouvons aussi remplacer par une constante comme define ("SEPARATEUR", "-"); 
//Mettre uniquement une constante lorsqu'une variable ne change pas au cours du temps

$joueur1 = [
    "nom" => "Matthieu", 
    "age" => 20, 
    "estUnHomme" => true
];
$joueur2 = [
    "nom" => "tata", 
    "age" => 18, 
    "estUnHomme" => false
];
$joueur3 = [ //Ici, tableau multidimentionnel (2tableaux)
    "nom" => [
        "Nom" => "toto",
        "Prenom" => "titi"
    ],
    "age" => 22, 
    "estUnHomme" => true
];

echo $joueur3["nom"]["Prenom"];//exemple lorsque l'on souhaite récuperer une valeur, nous devons aller ds la case nom et la sous case Prenom pour récupérer titi.

// Pour voir nos indices et valeurs d'un tableau en tant que déveveloppeur, nous pouvons utiliser print_r($joueur1)
genererSeparation($separateur);
afficherTableauJoueur($joueur1);
afficherTableauJoueur($joueur2);
afficherTableauJoueur($joueur3);


genererSeparation($separateur);// Si constante, remplacer par genererSeparation(SEPARATEUR);
afficherJoueur($joueur1["nom"], $joueur1["age"],$joueur1["estUnHomme"],);//Pour indiquer que la case 0,ça sera le nom, case 1 du tableau: l'âge et le boolééen en case 2
genererSeparation($separateur);
afficherJoueur($joueur2["nom"],$joueur2["age"],$joueur2["estUnHomme"],);
genererSeparation($separateur);

afficherJoueurLePlusAgee($joueur1["age"],$joueur2["age"]);
genererSeparation($separateur);

$differenceAge = calculDifferenceAge($joueur1["age"], $joueur2["age"]);
echo "La différence d'age est de :" . $differenceAge;
genererSeparation($separateur);

afficherMajeur($joueur1["age"]);
genererSeparation($separateur);
afficherMajeur($joueur2["age"]);
genererSeparation($separateur);// ou genererSeparation(SEPARATEUR) si on a déclarer une constante define


function afficherJoueur($nom, $age, $homme){
    echo "Nom du joueur 1 :" . $nom;
    echo "<br/>";
    echo "Age du joueur 2 : " . $age;
    echo "<br/>";
    

    if($homme === true){
        echo "C'est un homme";
        echo "<br/>";
    }else {
        echo "C'est une femme";
        echo "<br/>";
    }
}



function afficherJoueurLePlusAgee($ageJoueur1,$ageJoueur2){
    if(($ageJoueur1 > $ageJoueur2) === true) {
        echo "Joueur 1 est le plus agé";
    } else {
        echo "Joueur 2 est le plus agé";
    }
}

function calculDifferenceAge($age1, $age2){
    $resultat = $age1 - $age2;
    if($resultat < 0){
        $resultat = -$resultat;//Si le résultat est inférieur à 0, prends l'inverse (-$resultat) $ageJoueur2 - $ageJoueur1
    }
    return $resultat;
}

function genererSeparation($separateur){
   echo "<br />";
    for($i = 0 ; $i < 50; $i++){ //on part de 0 pour aller à 9, en régle générale quand c'est une valeur défini, on utilise la boucle for
        echo $separateur;
    }
    echo "<br />";
    /* while ($i < 50){ à la place du for
        $i++;
    }
  While = Réaliser une action tant que la condition n'est pas atteinte
    echo "<br/>";*/
}
 function afficherMajeur($age){
    if($age > 18){
        echo "Il est majeur";
    } else if ($age === 18){
        echo "Il est tout juste majeur";
    } else if ($age > 12){
        echo "C'est un adolescent";
    } else {
        echo "C'est un enfant";
    }
   /* switch($age){ (switch à faire et en remplacement ci-dessus le cas où il y a trop de if imbriqué)
        case 21 :  (On peut passer les conditions ensemble et en même temps sans mettre au début un echo à 21 et 20 mais pour cela il ne faut pas mettre de break)
        case 20 :
        case 19 : echo "Il est majeur";
        break;
        case 18 : echo "Il est tout juste majeur";
        break;
        case 17 : echo "Il est encore mineur";
        break;
        case 16 : echo "Il est mineur";
        break;
        default : echo "?????";(Si aucune des conditions ci-dessus)
        break;
    }*/
 }
 
 function afficherTableauJoueur($tab){//c'est une fonction récurcive
    // $nombreCaseTableau = count($tab); // count est une fonction qui va calculer le nombre de cases ds un tableau, ici, ça sera 3 cases
    // for($i =0; $i < $nombreCaseTableau; $i++){//on commence à la case 0 du tableau et on incrémente tant que l'on est inférieur au nombre de case ds le tableau
    //     echo $tab[$i] . "<br />";// <br/> pour sauter une ligne lors des affichages
    // }

    foreach($tab as $indice => $value){//foreach = pour parcourir l'ensemble des valeurs d'un tableau
        if (!is_array($value)){//!is_array = pour tester si le type n'est pas de type array, tester si une variable n est pas un tableau
            echo $indice . " : " . $value . "<br />";// $indice = pour afficher l'indice(numéro de case du tableau)
        }else {
            afficherTableauJoueur($value);
        }
        
    }
}


?>