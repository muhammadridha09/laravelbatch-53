<?php
require_once("animal.php");
require_once("frog.php");
require_once("ape.php");

echo"<h2>TUGAS 9-OOP PHP</h2>";

$sheep = new Animal ("Shaun");
echo "Name : " .$sheep ->animal. "<br>";
echo "Legs : " .$sheep ->legs. "<br>";
echo "Cold blooded : " .$sheep ->cold_b. "<br> <br>";

$frog = new frog ("Buduk");
echo "Name : " .$frog ->animal. "<br>";
echo "Legs : " .$frog ->legs. "<br>";
echo "Cold blooded : " .$frog ->cold_b. "<br> ";
echo $frog -> jump(). "<br> <br>";

$ape = new ape ("Kera Sakti");
echo "Name : " .$ape ->animal. "<br>";
echo "Legs : " .$ape ->legs. "<br>";
echo "Cold blooded : " .$ape ->cold_b. "<br> ";
echo $ape -> yell();
?>

