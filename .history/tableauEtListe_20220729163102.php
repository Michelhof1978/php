<?php
    $p1 = ["Luke",27,true,5,4];
    $p2 = ["Katy",22,false,3,6];
    $p3 = ["Marc",33,true,7,2];
?>

<h1>Selection du personnage</h1>
<form action="#" method="POST">
    <label for="perso">Personnage : </label>
    <select name="perso" id="perso" onChange = "submit()"><!--onChange ="" permet de valider sans bouton valider juste en selectionnant-->
        <option value="p1" <?php if(isset($_POST['perso']) && $_POST['perso'] === "p1") echo "selected"?>>Luke</option><!--Le if, c'est pour conserver et vérifier la valeur de POST de perso, si c'est le cas, echo selected-->
        <option value="p2" <?php if(isset($_POST['perso']) && $_POST['perso'] === "p2") echo "selected"?>>Katy</option>
        <option value="p3" <?php if(isset($_POST['perso']) && $_POST['perso'] === "p3") echo "selected"?>>Marc</option>
    </select> <br/>
</form>

<h2> Personnage : </h2>
<?php 
    if(!isset($_POST['perso']) || $_POST['perso'] === "p1"){
        echo "<div class='gauche'>";
            echo "<img src = 'images/player.png' alt = 'player Luke' />";
        echo "</div>";
        echo "<div class='gauche'>";
            afficherPerso($p1);
        echo "</div>";
    } else if($_POST['perso'] === "p2"){
        echo "<div class='gauche'>";
            echo "<img src = 'images/playerF.png' alt = 'player Katy' />";
        echo "</div>";
        echo "<div class='gauche'>";
            afficherPerso($p2);
        echo "</div>";
    }else if($_POST['perso'] === "p3"){
        echo "<div class='gauche'>";
            echo "<img src = 'images/playerM.png' alt = 'player Marc' />";
        echo "</div>";
        echo "<div class='gauche'>";
            afficherPerso($p3);
        echo "</div>";
    }
    echo "<div class='clearB'></div>";

    function afficherPerso($personnage){
        echo "Nom : " . $personnage[0] . "<br/>";
        echo "Age : " . $personnage[1] . "<br/>";
        if($personnage[2]){
            echo "Sexe : Homme <br/>";
        } else {
            echo "Sexe : Femme <br/>";
        }
        
        echo "Force : " . $personnage[3] . "<br/>";
        echo "Agilité : " . $personnage[4] . "<br/>";
    }
?>