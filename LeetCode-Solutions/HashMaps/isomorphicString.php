<?php

class Solution {
    /**
     * @param string $s
     * @param string $t
     * @return boolean
     */
    public function isIsomorphic($s, $t) {
        // Create two hash maps to store mappings
        $map_s_to_t = [];
        $map_t_to_s = [];

        // Loop through each character of s and t
        for ($i = 0; $i < strlen($s); $i++) {
            $char_s = $s[$i];
            $char_t = $t[$i];

            // Check if there's already a mapping from s to t
            if (isset($map_s_to_t[$char_s])) {
                if ($map_s_to_t[$char_s] !== $char_t) {
                    return false; // Mismatch in mapping
                }
            } else {
                $map_s_to_t[$char_s] = $char_t;
            }

            // Check if there's already a mapping from t to s
            if (isset($map_t_to_s[$char_t])) {
                if ($map_t_to_s[$char_t] !== $char_s) {
                    return false; // Mismatch in mapping
                }
            } else {
                $map_t_to_s[$char_t] = $char_s;
            }
        }

        return true;
    }
}


// Problem Statement

// 205. Isomorphic Strings
// Solved
// Easy
// Topics
// Companies
// Given two strings s and t, determine if they are isomorphic.

// Two strings s and t are isomorphic if the characters in s can be replaced to get t.

// All occurrences of a character must be replaced with another character while preserving the order of characters. No two characters may map to the same character, but a character may map to itself.

 

// Example 1:

// Input: s = "egg", t = "add"

// Output: true

// Explanation:

// The strings s and t can be made identical by:

// Mapping 'e' to 'a'.
// Mapping 'g' to 'd'.
// Example 2:

// Input: s = "foo", t = "bar"

// Output: false

// Explanation:

// The strings s and t can not be made identical as 'o' needs to be mapped to both 'a' and 'r'.

// Example 3:

// Input: s = "paper", t = "title"

// Output: true

 

// Constraints:

// 1 <= s.length <= 5 * 104
// t.length == s.length
// s and t consist of any valid ascii character.


// SOLUTION
// The problem requires checking if two strings, s and t, are isomorphic—meaning each character in s can be replaced by a character in t in a consistent manner.

// To do this, we iterate through both strings, comparing characters at the same position. The $char_s and $char_t variables are used to store the current characters from strings s and t during each iteration. These variables help in checking if the character mappings between the two strings are consistent:

// $char_s represents the current character in s.

// $char_t represents the current character in t.

// Two hash maps ($map_s_to_t and $map_t_to_s) track the one-to-one mappings:

// $map_s_to_t[$char_s] maps characters from s to t.

// $map_t_to_s[$char_t] maps characters from t to s.

// If any character is found to violate the mapping rule (i.e., it is already mapped to a different character), the function returns false. If the loop completes without issues, the strings are isomorphic, and the function returns true.

// The $char_s and $char_t variables are essential for accessing and comparing the current characters from both strings at each step of the iteration.
