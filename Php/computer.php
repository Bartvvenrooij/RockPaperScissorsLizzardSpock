<?php

/**
 * Created by PhpStorm.
 * User: Bart van Venrooij
 * Date: 25-11-2014
 * Time: 10:49
 */
class computer
{

    public $computerchoice;
    public $choices = array("rock", "paper", "scissors", "lizard", "spock");
    public $number;

    public function setComputerChoice()
    {
        $this->number = rand(0, 4);
        $this->computerchoice = $this->choices[$this->number];
    }

    public function getComputerChoice()
    {
        return $this->computerchoice;
    }
}


?>