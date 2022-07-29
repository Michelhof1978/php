<h1>Calculer moyenne</h1>

<form action="#" method="POST">
    <label for="nb">Combien de notes : </label>
    <input type="nb" name="nb" id="nb"><br/>
    <input type="submit" value="Valider">
</form>

<?php
if(isset($_POST['nb']) && $_POST['nb'] >0){
    $nbNotes = $_POST['nb'];
    for($i = 1; $i <= $nbNotes ; $i++){
        echo'<label for="nb">Combien de notes : </label>' //Pour générer un input, bien mettre de simple guillemet car il y à l'intérieur des doubles guillemets
       <input type="numberb" name="nb" id="nb"><br/>;
    }
}
?>