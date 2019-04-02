<?php 
require "Dice.php";

$d1= new Dice(8);
echo "Dice 1 rolls " . $d1->rollDice() . "<br>";
echo "In case you missed it, it rolled "
    .$d1->getAllRolls() . "<br><br>";
var_dump($d1);

$d2= new Dice(12);
echo "Dice 2 rolls " . $d2->rollDice() . "<br>";
echo "In case you missed it, it rolled "
    .$d2->getAllRolls() . "<br><br>";
var_dump($d2);

$d3= new Dice(5);
echo "Dice 1 rolls " . $d3->rollDice() . "<br>";
echo "In case you missed it, it rolled "
    .$d3->getAllRolls() . "<br><br>";
var_dump($d3);

$d4= new Dice();
echo "Dice 1 rolls " . $d4->rollDice() . "<br>";
echo "In case you missed it, it rolled "
    .$d4->getAllRolls() . "<br><br>";
var_dump($d4);

$d5= new Dice(248);
echo "Dice 1 rolls " . $d5->rollDice() . "<br>";
echo "In case you missed it, it rolled "
    .$d5->getAllRolls() . "<br><br>";
var_dump($d5);
