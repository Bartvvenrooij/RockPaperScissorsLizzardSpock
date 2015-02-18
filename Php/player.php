<?php

/**
 * Created by PhpStorm.
 * User: Bart van Venrooij
 * Date: 25-11-2014
 * Time: 10:42
 */
class player
{

    public $playerChoice;

    public function setPlayerChoice($string)
    {
        $this->playerChoice = $string;
    }

    public function getPlayerChoice()
    {
        return $this->playerChoice;
    }
}

?>