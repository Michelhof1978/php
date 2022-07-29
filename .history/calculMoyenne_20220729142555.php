<h1>Calculer moyenne</h1>

<form action="#" method="POST">
    <label for="nb">Combien de notes : </label>
    <input type="number" name="nb" id="nb"><br/>
    <input type="submit" value="Valider">
</form>

<?php
if(isset($_POST['nb']) && $_POST['nb'] >0){
    $nbNotes = $_POST['nb'];
    echo "<form action=\"#\" method=\"POST\">";//généreration du formulaire <form> </form>, Ne pas oublier de bien fermer la balise </form> ds le echo ci-dessous
    echo "<fieldset>";
    echo "<legend>Moyenne : </legend>";
    
    for($i = 1; $i <= $nbNotes ; $i++){
        echo"<label for=\"note" . $i ."\" > Note" . $i  ."  :</label>" ;//Pour générer un input, si on tape 5, 5 inputs s'afficheront//Bien mettre \ quand  guillemet à l'intérieur car risque conflits// Note . $i = pour chiffrer de 1 à nb saisi les inputs en partant de 1($i)
        echo "<input type=\"number\" name=\"note" . $i . "\" id=\"note" . $i . "\" required><br/><br/>";//Suite code pour générer input
     }
        echo"<input type=\"submit\" value=\"Calculer\">";
        echo "</fieldset>";
        echo "</form>";

        if(isset($_POST['note']))//On va tester si une valeur a été saisi par rapport à l étape du if ci-dessus
    }else {
        echo"<h2>Saisir une valeur</h2>";
    }

?>