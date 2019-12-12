<?php
class blackjack
{

    public  $score;
    public $playerCard;
    public $playerName;
    public $playerTurn;
    public $playerType;


    public function __construct( $name, $turn , $type ) {
        $this->playerName = $name;

        $this->playerTurn = $turn;

        $this->playerType = $type;
    }

    public function Hit($card) {

        $hit = rand( 0 ,  51);
        $this->playerCard = $hit;
        $this->score += $hit;
    }
    public function Stand($score) {

    }
    public function Surrender($score) {

    }

}