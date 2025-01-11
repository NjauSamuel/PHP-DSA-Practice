<?php

class Solution {

    /**
     * @param string $s
     * @param string $t
     * @return string
     */
    public function minWindow($s, $t) {
        $required = array_count_values(str_split($t));
        $windowCounts = [];
        $have = 0;
        $need = count($required);
        $left = 0;
        $right = 0;
        $minLength = PHP_INT_MAX;
        $minWindow = "";

        while ($right < strlen($s)) {
            $char = $s[$right];
            if (isset($required[$char])) {
                $windowCounts[$char] = ($windowCounts[$char] ?? 0) + 1;
                if ($windowCounts[$char] === $required[$char]) {
                    $have++;
                }
            }

            while ($have === $need) {
                if (($right - $left + 1) < $minLength) {
                    $minLength = $right - $left + 1;
                    $minWindow = substr($s, $left, $minLength);
                }
                $leftChar = $s[$left];
                if (isset($required[$leftChar])) {
                    $windowCounts[$leftChar]--;
                    if ($windowCounts[$leftChar] < $required[$leftChar]) {
                        $have--;
                    }
                }
                $left++;
            }
            $right++;
        }

        return $minWindow;
    }
}

//THE PROBLEM STATEMENT
// 76. Minimum Window Substring

// Given two strings s and t of lengths m and n respectively, return the minimum window 
// substring
//  of s such that every character in t (including duplicates) is included in the window. If there is no such substring, return the empty string "".

// The testcases will be generated such that the answer is unique.

// Example 1:

// Input: s = "ADOBECODEBANC", t = "ABC"
// Output: "BANC"
// Explanation: The minimum window substring "BANC" includes 'A', 'B', and 'C' from string t.
// Example 2:

// Input: s = "a", t = "a"
// Output: "a"
// Explanation: The entire string s is the minimum window.
// Example 3:

// Input: s = "a", t = "aa"
// Output: ""
// Explanation: Both 'a's from t must be included in the window.
// Since the largest window of s only has one 'a', return empty string.
 

// Constraints:

// m == s.length
// n == t.length
// 1 <= m, n <= 105
// s and t consist of uppercase and lowercase English letters.
 

// Follow up: Could you find an algorithm that runs in O(m + n) time?


// Explanation:
// Initialization:

// required: Tracks the character counts required from t.
// windowCounts: Tracks character counts in the current window of s.
// have and need: Track how many characters match their required counts in the current window.
// left and right: Pointers for the sliding window.
// minLength and minWindow: Store the smallest valid substring and its length.
// Expand the Window:

// Move the right pointer to include more characters into the window.
// Update windowCounts and have when valid characters are encountered.
// Shrink the Window:

// When all characters in t are satisfied (have === need), move the left pointer to minimize the window size.
// Update windowCounts and have when valid characters are removed from the window.
// Store the Minimum Window:

// If a smaller valid window is found, update minWindow and minLength.
// Return Result:

// Return the minWindow, or an empty string if no valid window is found.
// Complexity:
// Time Complexity: O(m + n), where m is the length of s and n is the length of t. Each character is processed at most twice (once by right and once by left).
// Space Complexity: O(n), where n is the number of unique characters in t. This is for the required and windowCounts arrays.

