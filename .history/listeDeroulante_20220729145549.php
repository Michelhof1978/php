<h1>Selection du personnage</h1>
<form action="#" method="POST">
    <label for="perso">Personnage : </label>
    <select name="perso" id="perso"> <!--select = creation liste deroulante-->
        <option value="homme">Homme</option><!--option = choixpour liste deroulante-->
        <option value="femme">Femme</option>
    </select> <br/>
    <input type="submit" value="Valider">
</form>

<?php 
    if(isset($_POST['perso'])){
       if($_POST['perso'] === "homme"){
            echo "<img src = 'images/player.png' alt = 'player Homme' />";
       } else if($_POST['perso'] === "femme"){
        echo "<img src = 'images/playerF.png' alt = 'player femme' />";
       }
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }
?>