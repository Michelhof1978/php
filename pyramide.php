<h1>Affichage d'une pyramide</h1>

<form action="#" method="POST">
    <label for="hauteur">Hauteur de la pyramide : </label>
    <input type="number" name="hauteur" id="hauteur">
    <input type="submit" value="Envoyer">

</form>

<?php
    if(isset($_POST['hauteur']) && $_POST['hauteur'] >0){//La fonction isset() permet de déterminer si une variable est bien définie, rôle qu'elle rempli à merveille. Malheureusement, isset() n'est pas capable de déterminer si la variable définie contient une quelconque valeur.
$hauteur = $_POST['hauteur'];
echo "<h2>La hauteur est :". $hauteur . "</h2>";
$txt = "";
for($i = 0; $i < $hauteur ; $i++){
    $txt .= "xx";
    echo $txt . "<br/>";
}

for($i = 0; $i < $hauteur-1 ; $i++ ){
    $txt =substr($txt,0,strlen($txt)-2);//La fonction substr() renvoie une partie d'une chaîne/strlen(fonction qui calcul le nombre de lettre d'une chaine de caractères
    echo $txt . "<br/>";
}
}else {
    echo"<h2>Saisir une valeur</h2>";
}
    
    ?>