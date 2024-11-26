<?php 

function web2()
{
    // for($i = 0; $i <= 9; $i++)
    // {
    //     echo "*";
    // }

    $n = 5;

     // Upper part of the diamond
     for ($i = 0; $i < $n; $i++) {
        // // Print spaces
        // for ($j = 0; $j < $n - $i - 1; $j++) {
        //     echo " ";
        // }
        // Print stars
        for ($j = 0; $j < (2 * $i + 1); $j++) {
            echo "*";
        }
        echo "\n"; // Move to the next line
    }
};

echo web2();
