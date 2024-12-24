<?php
class Solution {

    /**
     * @param string $haystack
     * @param string $needle
     * @return int
     */              
    function strStr($haystack, $needle) {
        $needleLength = strlen($needle);
        $haystackLength = strlen($haystack);

        for ($i = 0; $i <= $haystackLength - $needleLength; $i++) {
            $found = true;
            for ($j = 0; $j < $needleLength; $j++) {
                if ($haystack[$i + $j] !== $needle[$j]) {
                    $found = false;
                    break;
                }
            }
            if ($found) {
                return $i;
            }
        }

        return -1;
    }
}


// THE PROBLEM STATEMENT
// 28. Find the Index of the First Occurrence in a String
// Easy
// Topics
// Companies
// Given two strings needle and haystack, return the index of the first occurrence of needle in haystack, or -1 if needle is not part of haystack.

 

// Example 1:

// Input: haystack = "sadbutsad", needle = "sad"
// Output: 0
// Explanation: "sad" occurs at index 0 and 6.
// The first occurrence is at index 0, so we return 0.
// Example 2:

// Input: haystack = "leetcode", needle = "leeto"
// Output: -1
// Explanation: "leeto" did not occur in "leetcode", so we return -1.


// THE EXPLANATION

// Explanation:

// Initialization:

// Same as before: Calculate $needleLength and $haystackLength.
// Outer Loop:

// The outer loop (for ($i = 0; ...) iterates through the $haystack string, checking for potential starting positions of the $needle.
// Inner Loop:

// The inner loop (for ($j = 0; ...) compares individual characters of the $needle with the corresponding characters in the $haystack.
// If a mismatch is found, the $found flag is set to false, and the inner loop breaks.
// Match Found:

// If the inner loop completes without finding any mismatches ($found remains true), it means a match has been found.
// The function returns the starting index $i.
// No Match:

// If the outer loop completes without finding any matches, the function returns -1.
// This approach avoids the use of the substr() function and directly compares individual characters within the nested loops. This is a more fundamental and language-agnostic way to implement the string search algorithm.
