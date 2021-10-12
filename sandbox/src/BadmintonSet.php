<?php
namespace App;
class BadmintonSet{

    private $player1;
    private $player2;
    private $score;

    public function __construct($player1 , $player2){
        $this->player1 = $player1;
        $this->player2 = $player2;

        $this->score= array( ($this->player1->getName())=> 0 , ($this->player2->getName()) => 0 );
    }

    public function getScore($player){
        return $this->score[$player->getName()];
    }

    public function playerWinPoints($player, $points){
        $current = $this->score[$player->getName()];
        $this->score[$player->getName()] = $current + $points;
    }


    public function getWinner(){
        $winner = $this->get15PointsWinner();
        if ($winner != null) return $winner;
        return $this->get20PointsWinner();
    }

    private function get15PointsWinner(){
         $score1 = $this->getScore($this->player1);
         $score2 = $this->getScore($this->player2);

         if ($score1 >= 15 && ($score1 - $score2 > 1)){ return $this->player1;}
         if ($score2 >= 15 && ($score2 - $score1 > 1)){ return $this->player2;}

    }

    private function get20PointsWinner(){
        $score1 = $this->getScore($this->player1);
        $score2 = $this->getScore($this->player2);

        if ($score1 == 20){ return $this->player1;}
        if ($score2 == 20){ return $this->player2;}
    }







}