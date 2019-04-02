<?php 
require_once("dice.php");
require_once("casinoDice.php");
require_once("geekDice.php");

$d1 = new casinoDice();
$d1->timesToRoll(100); 
$d1->lastRolled();

var_dump($d1);
// var_dump($d1->latRolled);
