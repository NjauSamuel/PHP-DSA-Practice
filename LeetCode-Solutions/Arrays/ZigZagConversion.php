<?php

class Solution {

    /**
     * @param string $s
     * @param int $numRows
     * @return string 
     */
    function convert($s, $numRows) {
        // Edge case: If numRows is 1, no zigzag pattern is formed
        if ($numRows == 1) {
            return $s;
        }

        // Initialize rows as empty strings
        $rows = array_fill(0, min($numRows, strlen($s)), "");
        
        // Variables to track the current row and direction
        $currentRow = 0;
        $goingDown = false;

        // Traverse each character in the input string
        for ($i = 0; $i < strlen($s); $i++) {
            $rows[$currentRow] .= $s[$i];
            // Change direction at the top or bottom of the zigzag
            if ($currentRow == 0 || $currentRow == $numRows - 1) {
                $goingDown = !$goingDown;
            }
            // Move to the next row
            $currentRow += $goingDown ? 1 : -1;
        }

        // Combine all rows into the final result
        return implode("", $rows);
    }
}

// THE PROBLEM SOLVING LOGIC
// Key Concepts
// Zigzag Pattern:

// Characters are arranged in a zigzag pattern row by row.
// Once the bottom row is reached, the direction changes to go back up, creating the zigzag.
// Tracking Rows and Direction:

// The currentRow keeps track of which row a character should go into.
// The goingDown boolean tracks whether the zigzag is moving down or up.
// Combining Rows:

// After characters are placed in the zigzag pattern, each row is combined to form the final output string.


// THE PROBLEM STATEMENT

// 6. Zigzag Conversion
// Medium
// Topics
// Companies
// The string "PAYPALISHIRING" is written in a zigzag pattern on a given number of rows like this: (you may want to display this pattern in a fixed font for better legibility)

// P   A   H   N
// A P L S I I G
// Y   I   R
// And then read line by line: "PAHNAPLSIIGYIR"

// Write the code that will take a string and make this conversion given a number of rows:

// string convert(string s, int numRows);
 

// Example 1:

// Input: s = "PAYPALISHIRING", numRows = 3
// Output: "PAHNAPLSIIGYIR"
// Example 2:

// Input: s = "PAYPALISHIRING", numRows = 4
// Output: "PINALSIGYAHRPI"
// Explanation:
// P     I    N
// A   L S  I G
// Y A   H R
// P     I
// Example 3:

// Input: s = "A", numRows = 1
// Output: "A"
 

// Constraints:

// 1 <= s.length <= 1000
// s consists of English letters (lower-case and upper-case), ',' and '.'.
// 1 <= numRows <= 1000
