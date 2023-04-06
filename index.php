<?php
require_once('animal.php') ;
require_once('frog.php') ;
require_once('ape.php') ;

$sheep = new animal("shaun") ;
echo "name : " . $sheep->get_name() . "<br>" ;
echo "legs : " . $sheep->get_legs() . "<br>" ;
echo "cold blooded: " . $sheep->get_cold_blooded() . "<br>" ;
echo "<br>" ;

$sungokong = new Ape("Kera Sakti");
echo "name: " . $sungokong ->get_name() . "<br>";
echo "legs: " . $sungokong ->get_legs() . "<br>";
echo "cold blooded: " . $sungokong ->get_cold_blooded() . "<br>";
echo "yell: " . $sungokong ->yell() . "<br>";
echo "<br>";

$kodok = new frog("buduk");
echo "name: " . $kodok ->get_name() . "<br>";
echo "legs: " . $kodok ->get_legs() . "<br>";
echo "cold blooded: " . $kodok ->get_cold_blooded() . "<br>";
echo "jump: " . $kodok ->jump() . "<br>";
echo "<br>";
?>
