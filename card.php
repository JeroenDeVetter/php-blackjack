<?php


class card
{

    public $cardName;
    public $cardColor;
    public $cardSymbol;
    public $value;

    public function __construct( $name , $symbol) {
        if($symbol == 'Diamonds' || $symbol == 'Hearts') {
            if($name == 'Ace') {
                $this->cardName = $name;
                $this->cardColor = 'red';
                $this->cardSymbol = $symbol;
                $this->value = '11';
            }elseif ($name == 'Jack' || $name == 'Queen' || $name == 'King') {
                $this->cardName = $name;
                $this->cardColor = 'red';
                $this->cardSymbol = $symbol;
                $this->value = '10';
            }
            else {
                $this->cardName = $name;
                $this->cardColor = 'red';
                $this->cardSymbol = $symbol;
                $this->value = $name;
            }
        }else {
            if($name == 'Ace') {
                $this->cardName = $name;
                $this->cardColor = 'black';
                $this->cardSymbol = $symbol;
                $this->value = '11';
            }elseif ($name == 'Jack' || $name == 'Queen' || $name == 'King') {
                $this->cardName = $name;
                $this->cardColor = 'black';
                $this->cardSymbol = $symbol;
                $this->value = '10';
            }
            else {
                $this->cardName = $name;
                $this->cardColor = 'black';
                $this->cardSymbol = $symbol;
                $this->value = $name;
            }
        }
    }

}