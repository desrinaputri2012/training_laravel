<?php

namespace App;

class BasketBall
{
    public $home = "Chicago Bulls";
    public $away = "Miami Heat";
    public $homeScore = 0;
    public $awayScore = 0;
    
    public function __construct($home, $away)
    {
        $this->home= $home;
        $this->away= $away;
    }

    public function home(){
        echo $this->home; 
    }
    
    public function homeScore(){
        echo $this->homeScore . "<br>";
    }

    public function homeOnePoint(){
        echo $this->homeScore += 1 . "<br>";
    }

    public function homeThreePoints(){
        echo $this->homeScore += 3 . "<br>";
    }

    public function away(){
        echo $this->away . "<br>";
    }

    public function awayScore(){
        echo $this->awayScore . "<br>";
    }

    public function awayOnePoint(){
        echo $this->awayScore += 1 . "<br>";
    }

    public function awayTwoPoints(){
        echo $this->awayScore += 2 . "<br>";
    }

    public function awayThreePoints(){
        echo $this->awayScore += 3 . "<br>";
    }

}