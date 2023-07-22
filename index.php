<?php 

include 'inc/person.inc.php';
include 'inc/character.inc.php';

$name = "Omar";
$eyeColor = "Brown";
$age = 34;

$person1 = new Person();
$person1->setName("Nick");
echo $person1->name;

echo "<br>";

$person2 = new Person();
$person2->setName("Omar");
echo $person2->name;


echo "<br>";

$character1 = new Character();
$character1->setName("Rin");
$character1->setClass("Rogue");

$character1->viewCharacter();

?>
