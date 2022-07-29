<h1>Calculer moyenne</h1>

<form action="#" method="POST">
    <label for="nb">Combien de notes : </label>
    <input type="number" name="nb" id="nb"><br/>
    <input type="submit" value="Valider">
</form>

<?php
if(isset($_POST['nb']) && $_POST['nb'] >0){
    $nbNotes = $_POST['nb'];
    for($i = 1; $i <= $nbNotes ; $i++){
        echo"<label for=\"nb\"> Note . $i  .  :</label>" ;//Pour générer un input, si on tape 5, 5 inputs s'afficheront//Bien mettre de simple guillemet car il y à l'intérieur des doubles guillemets et cela risque de  faire conflit
        echo "<input type="number" name="\\nb\" id=\"nb\"><br/>";//Suite code pour générer input
     }
    }else {
        echo"<h2>Saisir une valeur</h2>";
    }

?>