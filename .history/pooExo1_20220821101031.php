<?php
require_once("classes/fruits.class.php");//on appelle la classe fruits.class.php une fois
?>
<h2>FRUITS :</h2>

<?php
$pomme1 = new Fruit(Fruit::POMME,25);//on appelle la classe Fruit et on lui passe en paramètre le nom du fruit et son poids
?>