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

function rotate(&$matrix) {
    $n = count($matrix);

    // Step 1: Transpose the matrix (swap matrix[i][j] with matrix[j][i])
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) { // j starts from i+1 to avoid re-swapping
            [$matrix[$i][$j], $matrix[$j][$i]] = [$matrix[$j][$i], $matrix[$i][$j]];
        }
    }

    processMatrix($matrix);

    // Step 2: Reverse each row
    foreach ($matrix as &$row) {
        $row = array_reverse($row);
    }

    processMatrix($matrix);
}

rotate($values);

// The Problem Statement: 

// 48. Rotate Image
// Solved
// Medium
// Topics
// Companies
// You are given an n x n 2D matrix representing an image, rotate the image by 90 degrees (clockwise).

// You have to rotate the image in-place, which means you have to modify the input 2D matrix directly. DO NOT allocate another 2D matrix and do the rotation.

 

// Example 1:


// Input: matrix = [[1,2,3],[4,5,6],[7,8,9]]
// Output: [[7,4,1],[8,5,2],[9,6,3]]
// Example 2:


// Input: matrix = [[5,1,9,11],[2,4,8,10],[13,3,6,7],[15,14,12,16]]
// Output: [[15,13,2,5],[14,3,4,1],[12,6,8,9],[16,7,10,11]]
 

// Constraints:

// n == matrix.length == matrix[i].length
// 1 <= n <= 20
// -1000 <= matrix[i][j] <= 1000