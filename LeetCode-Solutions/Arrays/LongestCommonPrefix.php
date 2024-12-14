<?php

class Solution {

    /**
     * @param string[] $strs
     * @return string
     */
    function longestCommonPrefix($strs) {
        // Edge case: if the array is empty, return an empty string
        if (empty($strs)) {
            return "";
        }

        // Assume the first string is the prefix
        $prefix = $strs[0];

        // Iterate through the rest of the strings
        foreach ($strs as $str) {
            // Reduce the prefix until it matches the start of the current string
            while (strpos($str, $prefix) !== 0) {
                $prefix = substr($prefix, 0, -1); // Remove the last character
                if ($prefix === "") {
                    return ""; // No common prefix
                }
            }
        }

        return $prefix;
    }
}

// THE DESCRIPTION


// Code
// Testcase
// Testcase
// Test Result
// 14. Longest Common Prefix
// Solved
// Easy
// Topics
// Companies
// Write a function to find the longest common prefix string amongst an array of strings.

// If there is no common prefix, return an empty string "".

 

// Example 1:

// Input: strs = ["flower","flow","flight"]
// Output: "fl"
// Example 2:

// Input: strs = ["dog","racecar","car"]
// Output: ""
// Explanation: There is no common prefix among the input strings.
 

// Constraints:

// 1 <= strs.length <= 200
// 0 <= strs[i].length <= 200
// strs[i] consists of only lowercase English letters.
