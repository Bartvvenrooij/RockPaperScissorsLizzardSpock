<?php
/**
 * Created by PhpStorm.
 * User: Bart van Venrooij
 * Date: 25-11-2014
 * Time: 14:45
 */
session_start();
include('TemplatePower' . DIRECTORY_SEPARATOR . 'class.TemplatePower.inc.php');
require("Php" . DIRECTORY_SEPARATOR . "player.php");
require("Php" . DIRECTORY_SEPARATOR . "computer.php");
require("Php" . DIRECTORY_SEPARATOR . "calculate.php");

$tpl = new TemplatePower("index.tpl");
$tpl->prepare();

if ( ! isset($_SESSION['compscore']) || ! isset($_SESSION['playerscore'])) {
    $_SESSION['compscore'] = 0;
    $_SESSION['playerscore'] = 0;
}

if (isset($_POST['submit'])) {
    if ($_POST['submit'] == "Reset") {
        $_SESSION['compscore'] = 0;
        $_SESSION['playerscore'] = 0;
    }
}

if (isset($_POST['PlayersChoice'])) {
    $player = new player();
    $com = new computer();
    $calc = new calculate();

    $player->setPlayerChoice($_POST['PlayersChoice']);
    $com->setComputerChoice();

    $playerschoice = $player->getPlayerChoice();
    $computerschoice = $com->getComputerChoice();
    $result = $calc->CalculateChoice($player->getPlayerChoice(), $com->getComputerChoice());
    if ($result == "You win!") {
        $_SESSION['playerscore']++;
    } elseif ($result == "You lose!") {
        $_SESSION['compscore']++;
    }
    $tpl->assign(array("playersChoice" => $player->getPlayerChoice(), "computersChoice" => $com->getComputerChoice(), "result" => $result));
} else {
    $tpl->assign(array("playersChoice" => "Please choose", "computersChoice" => "", "result" => ""));
}

$tpl->assign("title", "Rock, Paper, Scissor, Lizard, Spock, TPL");
$tpl->assign(array("playerScore" => $_SESSION['playerscore'], "compScore" => $_SESSION['compscore']));

$tpl->printToScreen();

?>