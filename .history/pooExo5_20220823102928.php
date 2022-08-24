<?php 
    require_once("classes/fruits.class.php");
    require_once("classes/panier.class.php");
    
?>

<h2> Fruits : </h2>

<?php   
    echo '<form action="#" method ="POST" >';
        echo '<fieldset><legend>Panier à créer :</legend>';
        echo '<label for="nb_pommes">Nombres de pommes : </label>';
        echo '<input type="number" name="nb_pommes" id="nb_pommes" required/>';
        echo '<label for="nb_cerise">Nombres de cerises : </label>';
        echo '<input type="number" name="nb_cerise" id="nb_cerise" required/>';
        echo '<input type="submit" value="Créer le panier" />';
    echo "</fieldset></form>";

    $pomme1 = new Fruit(Fruit::POMME,150);
    $pomme2 = new Fruit(Fruit::POMME,130);
    $pomme3 = new Fruit(Fruit::POMME,160);
    $cerise1 = new Fruit(Fruit::CERISE,10);
    $cerise2 = new Fruit(Fruit::CERISE,15);
    $cerise3 = new Fruit(Fruit::CERISE,20);
    $cerise4 = new Fruit(Fruit::CERISE,10);

    $panier1 = new Panier();
    $panier1->addFruit($pomme1);
    $panier1->addFruit($pomme2);
    $panier1->addFruit($cerise1);

    $panier2 = new Panier();
    $panier2->addFruit($pomme3);
    $panier2->addFruit($cerise2);
    $panier2->addFruit($cerise3);
    $panier2->addFruit($cerise4);

    $paniers = [$panier1,$panier2];

    if(isset($_POST['nb_pommes'])){
        $p = new Panier();
        $nbPomme = (int)$_POST['nb_pommes'];
        $nbCerise = (int)$_POST['nb_cerise'];
        for($i = 0 ; $i < $nbPomme;$i++){
            $p->addFruit(new Fruit(Fruit::POMME,rand(120,160)));
        }
        for($i = 0 ; $i < $nbCerise;$i++){
            $p->addFruit(new Fruit(Fruit::CERISE,rand(30,40)));
        } 
        $paniers[] = $p;
    }

    foreach($paniers as $panier){
        echo $panier;
    }

    echo '<form action="#" method ="POST" >';
        echo '<label for="panier"> Panier : </label>';
        echo '<select name="panier" id="panier" onChange="submit()">';
        echo "<option value=''></option>";
        foreach($paniers as $panier){
            echo "<option value='".$panier->getIdentifiant()."'>Panier ".$panier->getIdentifiant()."</option>";
        }
        echo "</select>";
    echo "</form>";

    if(isset($_POST['panier'])){
        $panierAAfficher = getPanierById((int)$_POST['panier']);
        echo "<h2>Affichage du panier ".$_POST['panier'] ."</h2>";
        echo $panierAAfficher;
    }

    function getPanierById($id){
        global $paniers;
        foreach($paniers as $panier){
            if($panier->getIdentifiant() === $id){
                return $panier;
            }
        }
    }

?>