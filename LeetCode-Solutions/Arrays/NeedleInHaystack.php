<?php

class Solution {

/**
 * @param String $haystack
 * @param String $needle
 * @return Integer
 */
function strStr($haystack, $needle) {
    $needleLength = strlen($needle);
    $haystackLength = strlen($haystack);

    for ($i = 0; $i <= $haystackLength - $needleLength; $i++) {
        if (substr($haystack, $i, $needleLength) === $needle) {
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

// $needleLength: Stores the length of the $needle string.
// $haystackLength: Stores the length of the $haystack string.
// Iteration:

// The for loop iterates through the $haystack string.
// It starts from index 0 and continues until $i reaches $haystackLength - $needleLength. This ensures that we don't go out of bounds when checking for substrings.
// Substring Check:

// substr($haystack, $i, $needleLength) extracts a substring of $haystack starting at index $i and with a length of $needleLength.
// If this extracted substring is equal to the $needle string, it means we found the first occurrence.
// In this case, the function returns the current index $i.
// No Match:

// If the loop completes without finding a match, the function returns -1 to indicate that $needle is not found in $haystack.
// This solution efficiently finds the index of the first occurrence of $needle in $haystack by iterating through the $haystack string and checking for substrings that match $needle.
