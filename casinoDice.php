<?php 
require_once("dice.php");

class casinoDice extends dice {
    protected $avg;
    
    public function __construct($numSides = 6){
        parent::__construct(6);
    }
    
    
    public function rollDice(){
        parent::rollDice();
        if (count($this->lastRolled)>100){
            array_shift($this->lastRolled);
        }
            $this->avg = array_sum($this->lastRolled) / count($this->lastRolled);

    }
    
    
    public function lastRolled(){
        echo count($this->lastRolled);
    }
}
