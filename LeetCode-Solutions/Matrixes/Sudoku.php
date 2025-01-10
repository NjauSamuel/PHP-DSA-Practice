<?php

// 36. Valid Sudoku
// Medium
// Topics
// Companies
// Determine if a 9 x 9 Sudoku board is valid. Only the filled cells need to be validated according to the following rules:

// Each row must contain the digits 1-9 without repetition.
// Each column must contain the digits 1-9 without repetition.
// Each of the nine 3 x 3 sub-boxes of the grid must contain the digits 1-9 without repetition.
// Note:

// A Sudoku board (partially filled) could be valid but is not necessarily solvable.
// Only the filled cells need to be validated according to the mentioned rules.
 

// Example 1:


// Input: board = 
// [["5","3",".",".","7",".",".",".","."]
// ,["6",".",".","1","9","5",".",".","."]
// ,[".","9","8",".",".",".",".","6","."]
// ,["8",".",".",".","6",".",".",".","3"]
// ,["4",".",".","8",".","3",".",".","1"]
// ,["7",".",".",".","2",".",".",".","6"]
// ,[".","6",".",".",".",".","2","8","."]
// ,[".",".",".","4","1","9",".",".","5"]
// ,[".",".",".",".","8",".",".","7","9"]]
// Output: true
// Example 2:

// Input: board = 
// [["8","3",".",".","7",".",".",".","."]
// ,["6",".",".","1","9","5",".",".","."]
// ,[".","9","8",".",".",".",".","6","."]
// ,["8",".",".",".","6",".",".",".","3"]
// ,["4",".",".","8",".","3",".",".","1"]
// ,["7",".",".",".","2",".",".",".","6"]
// ,[".","6",".",".",".",".","2","8","."]
// ,[".",".",".","4","1","9",".",".","5"]
// ,[".",".",".",".","8",".",".","7","9"]]
// Output: false
// Explanation: Same as Example 1, except with the 5 in the top left corner being modified to 8. Since there are two 8's in the top left 3x3 sub-box, it is invalid.
 

// Constraints:

// board.length == 9
// board[i].length == 9
// board[i][j] is a digit 1-9 or '.'


$variable = array_fill(0,9,[]);

echo json_encode($variable);

class Solution {

    /**
     * @param string[][] $board
     * @return boolean
     */
    function isValidSudoku($board) {
        $rows = array_fill(0, 9, []);
        $cols = array_fill(0, 9, []);
        $boxes = array_fill(0, 9, []);

        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                $num = $board[$i][$j];

                if ($num === '.') {
                    continue;
                }

                $boxIndex = (int) (floor($i / 3) * 3 + floor($j / 3));

                if (isset($rows[$i][$num]) || isset($cols[$j][$num]) || isset($boxes[$boxIndex][$num])) {
                    return false;
                }

                $rows[$i][$num] = true;
                $cols[$j][$num] = true;
                $boxes[$boxIndex][$num] = true;
            }
        }

        return true;
    }
}

// Explanation: 

// Alright! Imagine you have a big Sudoku board (a 9x9 grid), and you want to check if the numbers are placed correctly.

// How do we check the board?
// We need to follow three simple rules:

// Each row should not have the same number twice.
// Each column should not have the same number twice.
// Each small 3x3 box should not have the same number twice.
// Think of the rows like streets, the columns like buildings, and the 3x3 boxes like neighborhoods. We need to make sure no two houses in the same street, building, or neighborhood have the same house number!

// How does the code work?
// We make three "notebooks" (arrays) to keep track of numbers we've already seen:

// One for rows 📜
// One for columns 📜
// One for 3x3 boxes 📜
// We go through each square on the board:

// If the square is empty (.), we skip it.
// We check if we've already seen this number in the row, column, or small 3x3 box.
// If yes, the board is wrong, so we return false 🚫.
// If no, we mark that we have seen this number in our notebooks ✅.
// If we finish checking all squares and find no mistakes, the board is valid 🎉, and we return true.

// Example
// Let's check this row:
// ["5", "3", ".", ".", "7", ".", ".", ".", "."]

// We see a 5 → First time ✅
// We see a 3 → First time ✅
// We see a . → Ignore it
// We see a 7 → First time ✅
// Everything is good so far! We do the same for columns and boxes.

// Final Answer
// If we never find a duplicate, the Sudoku board is valid ✅. Otherwise, it's invalid ❌.
