<?php

$values = [[1,2,3],[4,5,6],[7,8,9]];

function processMatrix(&$matrix): void{
    for($i=0; $i < count($matrix); $i++){
        for($j=0; $j < count($matrix[$i]); $j++){
            echo $matrix[$i][$j]. ",";
        }
    
        echo "\n"; // New line for better formatting
    }
}

processMatrix($values);
