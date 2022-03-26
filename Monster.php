<?php

class Monster extends Person {

    public function specialAttack(){
        $this->life += 100;
    }
}