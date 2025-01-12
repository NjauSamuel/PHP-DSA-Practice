<?php

class Solution {
    /**
     * @param int[][] $matrix
     * @return int[]
     */
    public function spiralOrder($matrix) {
        $result = [];
        $m = count($matrix); // Number of rows
        $n = $m > 0 ? count($matrix[0]) : 0; // Number of columns

        if ($m == 0 || $n == 0) return $result; // Handle edge case: empty matrix

        $top = 0;
        $bottom = $m - 1;
        $left = 0;
        $right = $n - 1;

        while ($top <= $bottom && $left <= $right) {
            // Move right
            for ($i = $left; $i <= $right; $i++) {
                $result[] = $matrix[$top][$i];
            }
            $top++; // Move top boundary down

            // Move down
            for ($i = $top; $i <= $bottom; $i++) {
                $result[] = $matrix[$i][$right];
            }
            $right--; // Move right boundary left

            // Move left (if there are still rows left)
            if ($top <= $bottom) {
                for ($i = $right; $i >= $left; $i--) {
                    $result[] = $matrix[$bottom][$i];
                }
                $bottom--; // Move bottom boundary up
            }

            // Move up (if there are still columns left)
            if ($left <= $right) {
                for ($i = $bottom; $i >= $top; $i--) {
                    $result[] = $matrix[$i][$left];
                }
                $left++; // Move left boundary right
            }
        }

        return $result;
    }
}


// The Problem Statement

// 

// THE SOLUTION

// The solution to this problem was straight forward as I just had to 
// figure out 4 movements, right, down, left and up and in each pass, 
// determine whether a row still exists or a certain column still 
// exists. 