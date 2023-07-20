<?php 

include 'inc/person.inc.php';

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

?>
