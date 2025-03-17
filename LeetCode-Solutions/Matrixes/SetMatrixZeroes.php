<?php 

class Solution {
    /**
     * @param int[][] $matrix
     * @return null
     */
    public function setZeroes(&$matrix) {
        $m = count($matrix);
        $n = count($matrix[0]);
        $firstRowZero = false;
        $firstColZero = false;

        // Step 1: Identify zeroes in first row & column
        for ($i = 0; $i < $m; $i++) {
            if ($matrix[$i][0] == 0) {
                $firstColZero = true;
            }
        }
        for ($j = 0; $j < $n; $j++) {
            if ($matrix[0][$j] == 0) {
                $firstRowZero = true;
            }
        }

        // Step 2: Use first row & column as markers
        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                if ($matrix[$i][$j] == 0) {
                    $matrix[$i][0] = 0;
                    $matrix[0][$j] = 0;
                }
            }
        }

        // Step 3: Zero out based on markers
        for ($i = 1; $i < $m; $i++) {
            if ($matrix[$i][0] == 0) {
                for ($j = 1; $j < $n; $j++) {
                    $matrix[$i][$j] = 0;
                }
            }
        }
        for ($j = 1; $j < $n; $j++) {
            if ($matrix[0][$j] == 0) {
                for ($i = 1; $i < $m; $i++) {
                    $matrix[$i][$j] = 0;
                }
            }
        }

        // Step 4: Handle first row & column separately
        if ($firstRowZero) {
            for ($j = 0; $j < $n; $j++) {
                $matrix[0][$j] = 0;
            }
        }
        if ($firstColZero) {
            for ($i = 0; $i < $m; $i++) {
                $matrix[$i][0] = 0;
            }
        }
    }
}


//The Problem Statement


// Code
// Testcase
// Testcase
// Test Result
// 73. Set Matrix Zeroes
// Solved
// Medium
// Topics
// Companies
// Hint
// Given an m x n integer matrix matrix, if an element is 0, set its entire row and column to 0's.

// You must do it in place.

 

// Example 1:


// Input: matrix = [[1,1,1],[1,0,1],[1,1,1]]
// Output: [[1,0,1],[0,0,0],[1,0,1]]
// Example 2:


// Input: matrix = [[0,1,2,0],[3,4,5,2],[1,3,1,5]]
// Output: [[0,0,0,0],[0,4,5,0],[0,3,1,0]]
 

// Constraints:

// m == matrix.length
// n == matrix[0].length
// 1 <= m, n <= 200
// -231 <= matrix[i][j] <= 231 - 1
 

// Follow up:

// A straightforward solution using O(mn) space is probably a bad idea.
// A simple improvement uses O(m + n) space, but still not the best solution.
// Could you devise a constant space solution?