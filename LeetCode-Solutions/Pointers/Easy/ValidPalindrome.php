<?php

class Solution {

    /**
     * @param string $s
     * @return boolean
     */
    public function isPalindrome($s) {
        $left = 0;
        $right = strlen($s) - 1;

        while ($left < $right) {
            // Move left pointer to the next alphanumeric character
            while ($left < $right && !ctype_alnum($s[$left])) {
                $left++;
            }

            // Move right pointer to the previous alphanumeric character
            while ($left < $right && !ctype_alnum($s[$right])) {
                $right--;
            }

            // Compare the characters at the two pointers
            if (strtolower($s[$left]) !== strtolower($s[$right])) {
                return false;
            }

            $left++;
            $right--;
        }

        return true;
    }
}


// THE PROBLEM STATEMENT

// 125. Valid Palindrome
// Easy
// Topics
// Companies
// A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and removing all non-alphanumeric characters, it reads the same forward and backward. Alphanumeric characters include letters and numbers.

// Given a string s, return true if it is a palindrome, or false otherwise.

 

// Example 1:

// Input: s = "A man, a plan, a canal: Panama"
// Output: true
// Explanation: "amanaplanacanalpanama" is a palindrome.
// Example 2:

// Input: s = "race a car"
// Output: false
// Explanation: "raceacar" is not a palindrome.
// Example 3:

// Input: s = " "
// Output: true
// Explanation: s is an empty string "" after removing non-alphanumeric characters.
// Since an empty string reads the same forward and backward, it is a palindrome.
 

// Constraints:

// 1 <= s.length <= 2 * 105
// s consists only of printable ASCII characters.

// THE EXPLANATION
// Explanation:
// Two Pointers:

// Use left and right pointers to traverse the string from both ends towards the middle.
// Skip Non-Alphanumeric Characters:

// Use ctype_alnum to check if a character is alphanumeric. Move the pointers until they point to valid characters.
// Case Insensitivity:

// Convert characters to lowercase using strtolower before comparing.
// Comparison:

// If characters at left and right don't match, return false.
// Otherwise, move the pointers closer to the center.
// Termination:

// If the pointers cross without finding a mismatch, the string is a palindrome.
// Complexity:

// Time: 
// 𝑂(𝑛) O(n), where 𝑛 n is the length of the string. Each character is processed at most once.
// Space: 
// 𝑂(1) O(1), as no additional space is used.
