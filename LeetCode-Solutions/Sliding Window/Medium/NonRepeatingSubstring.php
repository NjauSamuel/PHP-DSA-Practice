<?php

class Solution {

    /**
     * @param string $s
     * @return int
     */
    public function lengthOfLongestSubstring($s) {
        $n = strlen($s);
        $charIndex = []; // To store the last seen index of each character
        $maxLength = 0; // To track the maximum length of unique substrings
        $start = 0; // Start index of the current substring

        for ($end = 0; $end < $n; $end++) {
            $char = $s[$end];

            // If the character is already in the current substring, move the start pointer
            if (isset($charIndex[$char]) && $charIndex[$char] >= $start) {
                $start = $charIndex[$char] + 1;
            }

            // Update the last seen index of the character
            $charIndex[$char] = $end;

            // Calculate the length of the current substring and update maxLength
            $maxLength = max($maxLength, $end - $start + 1);
        }

        return $maxLength;
    }
}

// THE EXPLANATION
// Explanation:
// This solution uses the sliding window technique along with a hash map to find the longest substring without repeating characters.

// Initialize Variables:

// $start: Points to the beginning of the current substring.
// $end: Traverses the string character by character.
// $charIndex: Stores the last seen index of each character.
// $maxLength: Tracks the length of the longest unique substring found so far.
// Iterate Through the String:

// For each character $s[$end]:
// Check if the character is already in $charIndex and is within the current window ($charIndex[$char] >= $start).
// If true, move the $start pointer to the right of the last seen position of the character to maintain uniqueness.
// Update the last seen index of the current character to $end.
// Calculate the current substring length ($end - $start + 1) and update $maxLength if it’s larger than the previous value.
// Return the Result:

// After traversing the string, $maxLength will contain the length of the longest unique substring.
// Complexity:
// Time Complexity: 
// 𝑂
// (
// 𝑛
// )
// O(n), where 
// 𝑛
// n is the length of the string. Each character is processed at most twice (once by $end and once by $start).
// Space Complexity: 
// 𝑂
// (
// 𝑘
// )
// O(k), where 
// 𝑘
// k is the size of the character set (e.g., 128 for ASCII).
