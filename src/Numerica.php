<?php

namespace App;

class Numerica
{

    public function numbers(){
        echo $this->numbers; 
    }

    public function first(){
        $numbers = ([3, 4, 9, 6, 8, 7, 5, 1, 10, 2]);
        $first = $numbers[0];
        echo $first . "<br>";
    }

    public function last(){
        $numbers = ([3, 4, 9, 6, 8, 7, 5, 1, 10, 2]);
        $last = $numbers[9];
        echo $last . "<br>";
    }

    public function min(){
        $numbers = ([3, 4, 9, 6, 8, 7, 5, 1, 10, 2]);
        $min = min($numbers);
        echo $min . "<br>";
    }

    public function max(){
        $numbers = ([3, 4, 9, 6, 8, 7, 5, 1, 10, 2]);
        $max = max($numbers);
        echo $max . "<br>";
    }

    public function sum(){
        $numbers = ([3, 4, 9, 6, 8, 7, 5, 1, 10, 2]);
        $sum = array_sum($numbers);
        echo $sum . "<br>";
    }

    public function rsort(){
        $numbers = ([3, 4, 9, 6, 8, 7, 5, 1, 10, 2]);
        $rsort = rsort($numbers);

        $arrlength = count($numbers);
            for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            }
        echo $rsort . "<br>";
    }

    public function sort(){
        $numbers = ([3, 4, 9, 6, 8, 7, 5, 1, 10, 2]);
        $sort = sort($numbers);
        $arrlength = count($numbers);
            for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            }
        echo $sort . "<br>";
    }

    public function odd(){
        $numbers = ([3, 4, 9, 6, 8, 7, 5, 1, 10, 2]);
        for ($var = 1; $var <= 10; $var+=1)
        {
            if ($var % 2 == 1)
            echo "$var \n";
        }

        echo "<br>";
    }

    public function even(){
        $numbers = ([3, 4, 9, 6, 8, 7, 5, 1, 10, 2]);
        for ($var = 1; $var <= 10; $var+=1)
        {
            if ($var % 2 == 0)
            echo "$var \n";
        }

        echo "<br>";
    }

    public function greaterThan(){

        $array = array(3, 4, 9, 6, 8, 7, 5, 1, 10, 2);

        function greaterThan($array, $number){
        
        if($i = array_search( $number, $array)) return $i;

        $array[] = $number;

        sort($array);
        $i = array_search($number, $array);

        if($i && isset($array[$i+1])) return $array[$i+1];

        return null;
        echo greaterThan($array, 5);
        }
    }
}