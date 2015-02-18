<?php

/**
 * Created by PhpStorm.
 * User: Bart van Venrooij
 * Date: 25-11-2014
 * Time: 10:52
 */
class calculate
{

    public function CalculateChoice($param, $param2)
    {
        switch ($param) {
            case "rock":
                if ($param2 === "scissors" || $param2 == "lizard") {
                    return "You win!";
                } elseif ($param === $param2) {
                    return "It is a tie!";
                } else {
                    return "You lose!";
                }
                break;
            case "paper":
                if ($param2 === "rock" || $param2 == "spock") {
                    return "You win!";
                } elseif ($param === $param2) {
                    return "It is a tie!";
                } else {
                    return "You lose!";
                }
                break;
            case "scissors";
                if ($param2 === "lizard" || $param2 == "paper") {
                    return "You win!";
                } elseif ($param === $param2) {
                    return "It is a tie!";
                } else {
                    return "You lose!";
                }
                break;
            case "lizard":
                if ($param2 === "paper" || $param2 == "spock") {
                    return "You win!";
                } elseif ($param === $param2) {
                    return "It is a tie!";
                } else {
                    return "You lose!";
                }
                break;
            case "spock":
                if ($param2 === "rock" || $param2 == "scissors") {
                    return "You win!";
                } elseif ($param === $param2) {
                    return "It is a tie!";
                } else {
                    return "You lose!";
                }
                break;

        }


    }
}

?>