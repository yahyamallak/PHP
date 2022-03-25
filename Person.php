<?php


class Person {

    public $name;

    private $life;

    private $atk;

    public function __construct($name="unkown", $life=100, $atk=20)
    {
        $this->name = $name;
        $this->life = $life;
        $this->atk = $atk;
    }

    public function getLife(){
        return $this->life;
    }

    public function setLife($life){
        $this->life = $life;
    }

    public function getAtk(){
        return $this->atk;
    }

    public function setAtk($atk){
        $this->atk = $atk;
    }

    public function health($points = null){
        if($this->life !== 100 ){
            if(is_null($points)){
                $this->life = 100;
            } else {
                $this->life += $points;
            }
        }
    }

    public function suicide(){
        $this->life = 0;
    }

    public function isDead(){
        if($this->life <= 0){
            echo $this->name . " is dead.";
        } else {
            echo $this->name . " is still alive.";
        }
    }


    public function attack($person){
        $person->life -= $this->atk;
    }


}














