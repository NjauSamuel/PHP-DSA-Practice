<?php

class Solution {

    /**
     * @param string $s 
     * @return string
     */
    function reverseWords($s) {

        // Step 1: Trim leading and trailing spaces
        $s = trim($s);

        // Step 2: Split the string into words by spaces
        $arrayString = preg_split('/\s+/', $s); // Splits by one or more spaces

        // This splits by one space
        // $arrayString = explode(" ", $s);

        $reversed = array_reverse($arrayString);

        $reversed = implode(" ", $reversed);

        return $reversed;
    }
}

// THE FOLLOWING IS MY LOGIC FOR HANDLING THE PROBLEM ABOVE

// 1. I first thought to use explode and implode directly but realized
// there is an edge case for words with trailing spaces so we trimmed. 

// 2. The implode still could not be used since words can have more than one 
// space between words so regex had to be used instead of implode. 

// 3. The implode however was usable here. 

// THE FOLLOWING IS THE PROBLEM STATEMENT

// 151. Reverse Words in a String
// Solved
// Medium
// Topics
// Companies
// Given an input string s, reverse the order of the words.

// A word is defined as a sequence of non-space characters. The words in s will be separated by at least one space.

// Return a string of the words in reverse order concatenated by a single space.

// Note that s may contain leading or trailing spaces or multiple spaces between two words. The returned string should only have a single space separating the words. Do not include any extra spaces.

 

// Example 1:

// Input: s = "the sky is blue"
// Output: "blue is sky the"
// Example 2:

// Input: s = "  hello world  "
// Output: "world hello"
// Explanation: Your reversed string should not contain leading or trailing spaces.
// Example 3:

// Input: s = "a good   example"
// Output: "example good a"
// Explanation: You need to reduce multiple spaces between two words to a single space in the reversed string.
 

// Constraints:

// 1 <= s.length <= 104
// s contains English letters (upper-case and lower-case), digits, and spaces ' '.
// There is at least one word in s.
 

// Follow-up: If the string data type is mutable in your language, can you solve it in-place with O(1) extra space?
