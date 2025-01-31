<?php

class Solution {

    /**
     * @param int[][] $board
     * @return null
     */
    public function gameOfLife(&$board) {
        $m = count($board);
        $n = count($board[0]);
        
        // Directions to check 8 neighbors (top-left, top, top-right, left, right, bottom-left, bottom, bottom-right)
        $directions = [
            [-1, -1], [-1, 0], [-1, 1],
            [0, -1],         [0, 1],
            [1, -1], [1, 0], [1, 1]
        ];
        
        // Step 1: Determine new states using temporary values (-1 and 2)
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $liveNeighbors = 0;
                
                // Count live neighbors
                foreach ($directions as [$dx, $dy]) {
                    $x = $i + $dx;
                    $y = $j + $dy;
                    
                    if ($x >= 0 && $x < $m && $y >= 0 && $y < $n && abs($board[$x][$y]) == 1) {
                        $liveNeighbors++;
                    }
                }
                
                // Apply rules
                if ($board[$i][$j] == 1 && ($liveNeighbors < 2 || $liveNeighbors > 3)) {
                    $board[$i][$j] = -1; // Mark as dead
                }
                if ($board[$i][$j] == 0 && $liveNeighbors == 3) {
                    $board[$i][$j] = 2; // Mark as alive
                }
            }
        }
        
        // Step 2: Update the board to final states
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($board[$i][$j] == -1) {
                    $board[$i][$j] = 0;
                }
                if ($board[$i][$j] == 2) {
                    $board[$i][$j] = 1;
                }
            }
        }
    }
}

// THE PROBLEM STATEMENT:

// 289. Game of Life
// Solved
// Medium
// Topics
// Companies
// According to Wikipedia's article: "The Game of Life, also known simply as Life, is a cellular automaton devised by the British mathematician John Horton Conway in 1970."

// The board is made up of an m x n grid of cells, where each cell has an initial state: live (represented by a 1) or dead (represented by a 0). Each cell interacts with its eight neighbors (horizontal, vertical, diagonal) using the following four rules (taken from the above Wikipedia article):

// Any live cell with fewer than two live neighbors dies as if caused by under-population.
// Any live cell with two or three live neighbors lives on to the next generation.
// Any live cell with more than three live neighbors dies, as if by over-population.
// Any dead cell with exactly three live neighbors becomes a live cell, as if by reproduction.
// The next state of the board is determined by applying the above rules simultaneously to every cell in the current state of the m x n grid board. In this process, births and deaths occur simultaneously.

// Given the current state of the board, update the board to reflect its next state.

// Note that you do not need to return anything.

 

// Example 1:


// Input: board = [[0,1,0],[0,0,1],[1,1,1],[0,0,0]]
// Output: [[0,0,0],[1,0,1],[0,1,1],[0,1,0]]
// Example 2:


// Input: board = [[1,1],[1,0]]
// Output: [[1,1],[1,1]]
 

// Constraints:

// m == board.length
// n == board[i].length
// 1 <= m, n <= 25
// board[i][j] is 0 or 1.
 

// Follow up:

// Could you solve it in-place? Remember that the board needs to be updated simultaneously: You cannot update some cells first and then use their updated values to update other cells.
// In this question, we represent the board using a 2D array. In principle, the board is infinite, which would cause problems when the active area encroaches upon the border of the array (i.e., live cells reach the border). How would you address these problems?



// THE SOLUTION LOGIC:

// Approach:
// To solve the problem in-place, we can use two temporary states to represent transitions without interfering with the original values:

// 2 → A dead cell that will become alive.
// -1 → A live cell that will die.
// After processing, we convert 2 → 1 and -1 → 0.