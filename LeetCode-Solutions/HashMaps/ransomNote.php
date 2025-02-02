<?php

class Solution {

    /**
     * @param string $ransomNote
     * @param string $magazine
     * @return boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $magazineCount = [];

        // Count letters in magazine
        for ($i = 0; $i < strlen($magazine); $i++) {
            $char = $magazine[$i];
            if (!isset($magazineCount[$char])) {
                $magazineCount[$char] = 0;
            }
            $magazineCount[$char]++;
        }

        // Check against ransomNote
        for ($i = 0; $i < strlen($ransomNote); $i++) {
            $char = $ransomNote[$i];
            if (!isset($magazineCount[$char]) || $magazineCount[$char] === 0) {
                return false;
            }
            $magazineCount[$char]--;
        }

        return true;
    }
}


//The Complexity O(M + N) M being looping through magazine, N being looping through ransome Note

//THE DESCRIPTION

// 383. Ransom Note
// Easy
// Topics
// Companies
// Given two strings ransomNote and magazine, return true if ransomNote can be constructed by using the letters from magazine and false otherwise.

// Each letter in magazine can only be used once in ransomNote.

 

// Example 1:

// Input: ransomNote = "a", magazine = "b"
// Output: false
// Example 2:

// Input: ransomNote = "aa", magazine = "ab"
// Output: false
// Example 3:

// Input: ransomNote = "aa", magazine = "aab"
// Output: true
 

// Constraints:

// 1 <= ransomNote.length, magazine.length <= 105
// ransomNote and magazine consist of lowercase English letters.
