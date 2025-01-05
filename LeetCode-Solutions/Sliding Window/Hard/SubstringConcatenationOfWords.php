<?php

class Solution {

    /**
     * @param string $s
     * @param string[] $words
     * @return int[]
     */
    public function findSubstring($s, $words) {
        $wordCount = count($words);
        if ($wordCount == 0) return [];

        $wordLength = strlen($words[0]);
        $substringLength = $wordCount * $wordLength;
        $sLength = strlen($s);

        if ($sLength < $substringLength) return [];

        // Create a frequency map for words
        $wordMap = array_count_values($words);
        $result = [];

        // Iterate through each possible starting point
        for ($i = 0; $i < $wordLength; $i++) {
            $left = $i;
            $right = $i;
            $currentMap = [];
            $count = 0;

            while ($right + $wordLength <= $sLength) {
                $word = substr($s, $right, $wordLength);
                $right += $wordLength;

                // Check if the word is in the words list
                if (isset($wordMap[$word])) {
                    if (!isset($currentMap[$word])) {
                        $currentMap[$word] = 0;
                    }
                    $currentMap[$word]++;
                    $count++;

                    // If the word count exceeds its frequency in wordMap, adjust the window
                    while ($currentMap[$word] > $wordMap[$word]) {
                        $leftWord = substr($s, $left, $wordLength);
                        $currentMap[$leftWord]--;
                        $count--;
                        $left += $wordLength;
                    }

                    // If the count matches, we found a valid substring
                    if ($count == $wordCount) {
                        $result[] = $left;
                    }
                } else {
                    // Reset if the word is not in the wordMap
                    $currentMap = [];
                    $count = 0;
                    $left = $right;
                }
            }
        }

        return $result;
    }
}


// THE PROBLEM STATEMENT


// THE EXPLANATION
// Explanation:
// Initial Setup:

// Calculate the total length of the concatenated substring (substringLength).
// Create a frequency map (wordMap) for the words in the array.
// Sliding Window Approach:

// Iterate through the string starting from each index i modulo wordLength.
// Maintain a sliding window with a currentMap to count the words found in the window.
// Use two pointers (left and right) to expand and shrink the window as needed.
// Adjusting the Window:

// If the count of a word in currentMap exceeds its count in wordMap, slide the left pointer forward and update currentMap and count.
// If a substring matches, add the left pointer to the result array.
// Resetting the Window:

// If a word is not in wordMap, reset the window and start fresh from the next position.
// Complexity:
// Time Complexity: 
// 𝑂
// (
// 𝑛
// ×
// wordLength
// )
// O(n×wordLength), where 
// 𝑛
// n is the length of the string s. Each word is processed at most twice (once when entering the window and once when leaving it).
// Space Complexity: 
// 𝑂
// (
// 𝑘
// )
// O(k), where 
// 𝑘
// k is the number of unique words in the words array.


