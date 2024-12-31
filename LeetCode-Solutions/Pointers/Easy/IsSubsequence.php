<?php

class Solution {

    /**
     * @param string $s
     * @param string $t
     * @return boolean
     */
    public function isSubsequence($s, $t) {
        $sLen = strlen($s);
        $tLen = strlen($t);
        $sIndex = 0;
        $tIndex = 0;
        
        // Traverse through string t to match characters from s
        while ($sIndex < $sLen && $tIndex < $tLen) {
            if ($s[$sIndex] === $t[$tIndex]) {
                $sIndex++;
            }
            $tIndex++;
        }
        
        // If we matched all characters in s, it's a subsequence
        return $sIndex === $sLen;
    }
}

// THE PROBLEM STATEMENT
// 392. Is Subsequence
// Easy
// Topics
// Companies
// Given two strings s and t, return true if s is a subsequence of t, or false otherwise.

// A subsequence of a string is a new string that is formed from the original string by deleting some (can be none) of the characters without disturbing the relative positions of the remaining characters. (i.e., "ace" is a subsequence of "abcde" while "aec" is not).

 

// Example 1:

// Input: s = "abc", t = "ahbgdc"
// Output: true
// Example 2:

// Input: s = "axc", t = "ahbgdc"
// Output: false

// Explanation
// Two-pointer Technique:

// Use two pointers, sIndex and tIndex, starting at the beginning of s and t.
// Increment sIndex only when the characters at s[$sIndex] and t[$tIndex] match.
// Always increment tIndex to keep traversing t.
// Termination:

// The loop ends when either sIndex reaches the end of s (all characters matched) or tIndex reaches the end of t (some characters in s couldn't be matched).
// Return Result:

// If sIndex equals the length of s, all characters of s were found in order in t.
