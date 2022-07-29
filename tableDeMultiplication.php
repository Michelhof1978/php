
<h1>Affichage des tables de multiplication</h1>

<form action="#" method="get">
    <label for="table">Table de multiplication : </label>
    <input type="number" name="table" id="table">
    <input type="submit" value="Envoyer">

</form>

<?php
    if(isset($_GET["table"])){//il faut faire un test pour savoir si la valeur de $_GET["table"] existe ou non, s il n'existe pas, on affiche rien en dessous, si on ajoute un chiffre, les multiplication en dessous s'affichent.
        echo "<h2> La table de " . $_GET["table"] . "</h2>"; //$_GET["table"] Chiffre à récupérer ds le champs table

for($i = 1; $i <= 10 ; $i++){
    echo $i . " * ". $_GET["table"] . " = " . $i * $_GET["table"] . "<br/>";
} 
    } else {
        echo "<h2>Saisir une valeur ci-dessus</h2>";
    }

?>