<?php

class Solution {

    /**
     * @param int $target
     * @param int[] $nums
     * @return int
     */
    public function minSubArrayLen($target, $nums) {
        $n = count($nums);
        $left = 0; // Start of the sliding window
        $sum = 0; // Current sum of the window
        $minLength = PHP_INT_MAX; // Initialize to a large value

        // Traverse the array using the right pointer
        for ($right = 0; $right < $n; $right++) {
            $sum += $nums[$right]; // Add the current element to the sum

            // Shrink the window as long as the sum is >= target
            while ($sum >= $target) {
                $minLength = min($minLength, $right - $left + 1); // Update the minimum length
                $sum -= $nums[$left]; // Remove the leftmost element from the sum
                $left++; // Move the left pointer forward
            }
        }

        // If no valid subarray was found, return 0; otherwise, return the minimum length
        return $minLength === PHP_INT_MAX ? 0 : $minLength;
    }
}

// Explanation:
// This solution uses the sliding window technique to find the minimal length of a subarray whose sum is greater than or equal to the target.

// Initialize Pointers and Variables:

// $left: Marks the start of the sliding window.
// $sum: Stores the current sum of the sliding window.
// $minLength: Tracks the minimum length of a valid subarray.
// Expand the Window:

// Use a for loop to iterate with the $right pointer (end of the window).
// Add the current number ($nums[$right]) to $sum.
// Shrink the Window:

// While the current sum is greater than or equal to the target:
// Update the minimum length: min($minLength, $right - $left + 1).
// Remove the leftmost element from the sum.
// Move the $left pointer forward to shrink the window.
// Return the Result:

// If no valid subarray was found ($minLength is still PHP_INT_MAX), return 0.
// Otherwise, return $minLength.
// Complexity:
// Time Complexity: 
// 𝑂
// (
// 𝑛
// )
// O(n), where 
// 𝑛
// n is the size of the input array. Both pointers traverse the array once.
// Space Complexity: 
// 𝑂
// (
// 1
// )
// O(1), as we use only variables and no additional data structures.
// Example Walkthrough:
// Input: target = 7, nums = [2,3,1,2,4,3]
// Initialize:

// $left = 0, $sum = 0, $minLength = PHP_INT_MAX.
// Expand Window:

// Add numbers while expanding with $right:
// $right = 0, $sum = 2 (sum < target).
// $right = 1, $sum = 5 (sum < target).
// $right = 2, $sum = 6 (sum < target).
// $right = 3, $sum = 8 (sum >= target).
// Shrink Window:

// Shrink by moving $left:
// Remove nums[0], $left = 1, $sum = 6.
// Stop shrinking as $sum < target.
// Continue Process:

// Continue expanding and shrinking as necessary until the entire array is processed.
// Final Result:

// Minimal subarray length is 2 ([4, 3]).
