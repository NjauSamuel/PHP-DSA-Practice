<?php

class Solution {

    /**
     * @param int[] $numbers
     * @param int $target
     * @return int[]
     */
    public function twoSum($numbers, $target) {
        $left = 0;
        $right = count($numbers) - 1;

        while ($left < $right) {
            $sum = $numbers[$left] + $numbers[$right];

            if ($sum === $target) {
                // Return 1-indexed positions
                return [$left + 1, $right + 1];
            } elseif ($sum < $target) {
                $left++;
            } else {
                $right--;
            }
        }

        // The problem guarantees one solution, so we won't reach here.
        return [];
    }
}

// THE PROBLEM STATEMENT:
// 167. Two Sum II - Input Array Is Sorted
// Solved
// Medium
// Topics
// Companies
// Given a 1-indexed array of integers numbers that is already sorted in non-decreasing order, find two numbers such that they add up to a specific target number. Let these two numbers be numbers[index1] and numbers[index2] where 1 <= index1 < index2 <= numbers.length.

// Return the indices of the two numbers, index1 and index2, added by one as an integer array [index1, index2] of length 2.

// The tests are generated such that there is exactly one solution. You may not use the same element twice.

// Your solution must use only constant extra space.

 

// Example 1:

// Input: numbers = [2,7,11,15], target = 9
// Output: [1,2]
// Explanation: The sum of 2 and 7 is 9. Therefore, index1 = 1, index2 = 2. We return [1, 2].
// Example 2:

// Input: numbers = [2,3,4], target = 6
// Output: [1,3]
// Explanation: The sum of 2 and 4 is 6. Therefore index1 = 1, index2 = 3. We return [1, 3].
// Example 3:

// Input: numbers = [-1,0], target = -1
// Output: [1,2]
// Explanation: The sum of -1 and 0 is -1. Therefore index1 = 1, index2 = 2. We return [1, 2]


// Explanation
// Two-pointer Technique:

// Use two pointers, left (starting at the beginning of the array) and right (starting at the end).
// Calculate the sum of the elements at these pointers.
// Adjust the pointers based on the comparison between the sum and the target:
// If the sum is less than the target, move the left pointer rightward to increase the sum.
// If the sum is greater than the target, move the right pointer leftward to decrease the sum.
// 1-Indexed Output:

// Since the problem specifies 1-indexed results, return the positions as [left + 1, right + 1].
// Guaranteed Solution:

// The problem ensures that there is always exactly one solution, so the loop will terminate with a result.
