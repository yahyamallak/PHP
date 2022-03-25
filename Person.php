<?php


class Person {

    public $name;

    public $life = 80;

    public $atk = 20;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function health(){
        $this->life = 100;
    }

    public function suicide(){
        $this->life = 0;
    }

    public function isDead(){
        if($this->life == 0){
            echo $this->name . " is dead.";
        } else {
            echo $this->name . " is still alive.";
        }
    }


}