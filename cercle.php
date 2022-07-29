<h1>Cercle - Périmètre et Aire</h1>

<form action="#" method="POST">
    <label for="rayon">Rayon : </label>
    <input type="number" name="rayon" id="rayon"><br/>

    <label for="perimetre">Perimetre : </label>
    <input type="checkbox" name="perimetre" id="perimetre"checked> <br/><!--checked pour qu'il soit automatiquement checké-->
    
    <label for="aire">Aire: : </label>
    <input type="checkbox" name="aire" id="aire"checked> <br/>

    <input type="submit" value="Envoyer">

</form>
<?php
    if(isset($_POST['rayon']) && $_POST['rayon'] >0){//La fonction isset() permet de déterminer si une variable est bien définie, rôle qu'elle rempli à merveille. Malheureusement, isset() n'est pas capable de déterminer si la variable définie contient une quelconque valeur.
        $rayon = $_POST["rayon"];
        echo"<h2>Résultats</h2>";
        echo"</p>";

        if(isset($_POST["perimetre"])){
            echo"Le périmètre d'un cercle de rayon: <b>". $rayon . "</b> est :<b>" . ($rayon * 2 * pi()) . "</b><br/>" ;
        }
        if(isset($_POST["aire"])){
            echo"L'aire d'un cercle de rayon: <b>". $rayon . "</b> est :<b>" . ($rayon * $rayon * pi()) . "</b><br/>" ;
        }
        echo"</p>";
        
}else {
    echo"<h2>Saisir une valeur</h2>";
}

    
    ?>