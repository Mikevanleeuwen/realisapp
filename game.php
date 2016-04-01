<?php
class Game{
    //properties
    public $name;
    public $price;
    public $gameplayLength;
    public $online;
    public $genre;
    public $amount;

    // getters setters

 /*   public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }


    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setGamePlayLength($gameplaylength){
        $this->gameplayLength = $gameplaylength;
    }

    public function getGamePlayLength(){
        return $this->gameplayLength;
    }

    public function setOnline($online){
        $this->online = $online;
    }

    public function getOnline(){
        return $this->online;
    }

    public function setGenre($genre){
        $this->genre = $genre;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setAmount($amount){
        $this->amount = $amount;
    }

    public function getAmount(){
        return $this->amount;
    }*/





    // functionalities
    function run(){
        return $this->name.' has run for:'.$this->gameplayLength.' hours..';
    }

    function close(){
        return $this->name.' has shut down';

    }

    function sell(){
        $this->amount = $this->amount - 1;
        return $this->name.' has sold for: '.$this->price.'<br> amount in store now:'.$this->amount;

    }







}