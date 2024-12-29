<?php

class Solution {

    /**
     * @param string[] $words
     * @param int $maxWidth
     * @return string[]
     */
    function fullJustify($words, $maxWidth) {
        $result = [];
        $line = [];
        $lineLength = 0;

        foreach ($words as $word) {
            if ($lineLength + strlen($word) + count($line) > $maxWidth) {
                $result[] = $this->justifyLine($line, $lineLength, $maxWidth);
                $line = [];
                $lineLength = 0;
            }

            $line[] = $word;
            $lineLength += strlen($word);
        }

        // Handle the last line (left-justified)
        $result[] = $this->leftJustifyLine($line, $maxWidth);

        return $result;
    }

    private function justifyLine($line, $lineLength, $maxWidth) {
        $numWords = count($line);
        $numSpaces = $maxWidth - $lineLength;

        if ($numWords === 1) {
            return str_pad($line[0], $maxWidth);
        }

        $spacesBetweenWords = intdiv($numSpaces, $numWords - 1);
        $extraSpaces = $numSpaces % ($numWords - 1);

        $justifiedLine = '';
        for ($i = 0; $i < $numWords - 1; $i++) {
            $justifiedLine .= $line[$i];
            $justifiedLine .= str_repeat(' ', $spacesBetweenWords + ($i < $extraSpaces ? 1 : 0));
        }

        $justifiedLine .= $line[$numWords - 1];

        return $justifiedLine;
    }

    private function leftJustifyLine($line, $maxWidth) {
        $lineText = implode(' ', $line);
        return str_pad($lineText, $maxWidth);
    }
}

// THE PROBLEM STATEMENT
// Given an array of strings words and a width maxWidth, format the text such that each line has exactly maxWidth characters and is fully (left and right) justified.

// You should pack your words in a greedy approach; that is, pack as many words as you can in each line. Pad extra spaces ' ' when necessary so that each line has exactly maxWidth characters.

// Extra spaces between words should be distributed as evenly as possible. If the number of spaces on a line does not divide evenly between words, the empty slots on the left will be assigned more spaces than the slots on the right.

// For the last line of text, it should be left-justified, and no extra space is inserted between words.

// Note:

// A word is defined as a character sequence consisting of non-space characters only.
// Each word's length is guaranteed to be greater than 0 and not exceed maxWidth.
// The input array words contains at least one word.
 

// Example 1:

// Input: words = ["This", "is", "an", "example", "of", "text", "justification."], maxWidth = 16
// Output:
// [
//    "This    is    an",
//    "example  of text",
//    "justification.  "
// ]
// Example 2:

// Input: words = ["What","must","be","acknowledgment","shall","be"], maxWidth = 16
// Output:
// [
//   "What   must   be",
//   "acknowledgment  ",
//   "shall be        "
// ]
// Explanation: Note that the last line is "shall be    " instead of "shall     be", because the last line must be left-justified instead of fully-justified.
// Note that the second line is also left-justified because it contains only one word.
// Example 3:

// Input: words = ["Science","is","what","we","understand","well","enough","to","explain","to","a","computer.","Art","is","everything","else","we","do"], maxWidth = 20
// Output:
// [
//   "Science  is  what we",
//   "understand      well",
//   "enough to explain to",
//   "a  computer.  Art is",
//   "everything  else  we",
//   "do                  "
// ]

// THE EXPLANATION
// Explanation:
// Grouping Words:

// Use a line array to collect words until adding another word would exceed the maxWidth.
// When the line is full, justify it and reset for the next line.
// Line Justification:

// For a single word in the line, left-justify by padding spaces to the right.
// Otherwise, distribute spaces as evenly as possible between words, assigning extra spaces to the leftmost gaps.
// Left-Justify Last Line:

// For the final line, words are separated by single spaces and padded on the right.
// Helper Methods:

// justifyLine: Handles full justification for regular lines.
// leftJustifyLine: Handles left justification for the last line.
// This solution ensures the text aligns as required by the problem description.
