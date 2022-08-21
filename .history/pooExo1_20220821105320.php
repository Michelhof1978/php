<?php
require_once("classes/fruits.class.php");//on appelle la classe fruits.class.php une fois
?>
<h2>FRUITS :</h2>

<?php
$pomme1 = new Fruit(Fruit::POMME,150);//on appelle la classe Fruit et on lui passe en paramètre le nom du fruit(constante) et son poids
$pomme2 = new Fruit(Fruit::POMME,200);
$cerise1 = new Fruit(Fruit::CERISE,100);
$cerise2 = new Fruit(Fruit::CERISE,200);
$fruits = array($pomme1,$pomme2,$cerise1,$cerise2);//on crée un tableau avec les fruits

foreach($fruits as $fruit){//on parcourt le tableau
    echo $fruit;//on affiche le contenu de la variable $fruit
    echo "<br />"----------------------------;
}



?>