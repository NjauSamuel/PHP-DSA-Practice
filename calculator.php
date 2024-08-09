<?php

class calculator{
    public function add($a, $b){
        return $a + $b;
    }

    public function subtract($a, $b){
        return $a - $b;
    }

    public function multiply($a, $b){
        return $a * $b;
    }

    public function divide($a, $b){
        return $a / $b;
    }
}

$calculated = new calculator();

echo $calculated->add(15, 16);

echo $calculated->subtract(15, 16);
echo $calculated->divide(15, 16);
echo $calculated->multiply(15, 16);
