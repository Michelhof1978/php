<?php
require_once("classes/fruits.class.php");//on appelle la classe fruits.class.php une fois
?>
<h2>FRUITS :</h2>

<?php
$pomme1 = new Fruit(Fruit::POMME,150);//on appelle la classe Fruit et on lui passe en paramètre le nom du fruit(constante) et son poids
$pomme2 = new Fruit(Fruit::POMME,200);

print_r($pomme1);//on vérifi si l'objet est bien créé

?>