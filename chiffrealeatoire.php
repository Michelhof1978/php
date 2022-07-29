<?php
session_start();//A declarer à chaque fois que l'on en a besoin, parmis les autres SESSION, c'est celui qui est le plus utilisé 
if(!isset($_SESSION["chiffreAleatoire"])){//Si je n'ai pas de valeur ds SESSION chiffre aleatoire,je vais mettre la valeur 5 sinon, je ne fais rien
    $_SESSION["chiffreAleatoire"] = rand(1,10);//rand permet de génerer un chiffre aléatoire compris entre 1 et 10
}
//Utiliser une session permet de stocker des données qui vont être véhiculables ds l'ensemble de nos pages du site, ces données sont conservés côté serveur et seront automatiquement supprimé quand l'utilisateur quittera le site
//La session vous permet de stocker des informations sur l'utilisateur de manière sécurisée. Contrairement aux cookies l'utilisateur ne peut ni voir ni éditer les informations qui sont stockées en session.
?>

<h1>Trouver le nombre choisi par l'ordinateur</h1>

<form action="#" method="POST">
    <input type="hidden" name="reinit" value="yes"> <!--hidden = permet d'avoir un champ caché contenant une information-->
    <input type="submit" value="Réinitialiser">
</form>

<form action="#" method="POST">
    <label for="chiffre">Quel est le chiffre : </label>
    <input type="number" name="chiffre" id="chiffre">
    <input type="submit" value="Valider">
</form>

<?php
    if(isset($_POST["reinit"]) && $_POST["reinit"] === "yes"){
        $_SESSION["chiffreAleatoire"] = rand(1,10);
    }
    
    $chiffreAlea = $_SESSION["chiffreAleatoire"];

    if(isset($_POST["chiffre"]) && $_POST["chiffre"] >0){
        $chiffreSaisi = (int)$_POST["chiffre"];//(int) il faut le déclarer en entier car en html, ce qui est envoyé, c'est une chaine de car
       
        echo "<h2>";
        if($chiffreAlea === $chiffreSaisi){
            echo"c'est gagné";
        }else{
            if($chiffreAlea > $chiffreSaisi){
               echo"Le chiffre est plus grand"; 
            }else{
                echo"Le chiffre est plus petit"; 
            }
        }
        echo "</h2>";// Nous pouvons declarer en H2 tous les echos qui sont ds la balise echo"<h2>" echo"</h2>"
    }else {
        echo "<h2>Saisir une valeur</h2>";
    }
?>