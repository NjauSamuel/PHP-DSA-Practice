<?php

class Solution {

    /**
     * @param int[] $nums
     * @return int[][]
     */
    public function threeSum($nums) {
        $result = [];
        $n = count($nums);

        // Sort the array
        sort($nums);

        for ($i = 0; $i < $n - 2; $i++) {
            // Avoid duplicate results for the first element
            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }

            $left = $i + 1;
            $right = $n - 1;

            while ($left < $right) {
                $sum = $nums[$i] + $nums[$left] + $nums[$right];

                if ($sum === 0) {
                    $result[] = [$nums[$i], $nums[$left], $nums[$right]];

                    // Avoid duplicates for the second element
                    while ($left < $right && $nums[$left] === $nums[$left + 1]) {
                        $left++;
                    }

                    // Avoid duplicates for the third element
                    while ($left < $right && $nums[$right] === $nums[$right - 1]) {
                        $right--;
                    }

                    $left++;
                    $right--;
                } elseif ($sum < 0) {
                    $left++;
                } else {
                    $right--;
                }
            }
        }

        return $result;
    }
}

// THE PROBLEM STATEMENT
// 15. 3Sum
// Solved
// Medium
// Topics
// Companies
// Hint
// Given an integer array nums, return all the triplets [nums[i], nums[j], nums[k]] such that i != j, i != k, and j != k, and nums[i] + nums[j] + nums[k] == 0.

// Notice that the solution set must not contain duplicate triplets.

 

// Example 1:

// Input: nums = [-1,0,1,2,-1,-4]
// Output: [[-1,-1,2],[-1,0,1]]
// Explanation: 
// nums[0] + nums[1] + nums[2] = (-1) + 0 + 1 = 0.
// nums[1] + nums[2] + nums[4] = 0 + 1 + (-1) = 0.
// nums[0] + nums[3] + nums[4] = (-1) + 2 + (-1) = 0.
// The distinct triplets are [-1,0,1] and [-1,-1,2].
// Notice that the order of the output and the order of the triplets does not matter.
// Example 2:

// Input: nums = [0,1,1]
// Output: []
// Explanation: The only possible triplet does not sum up to 0.
// Example 3:

// Input: nums = [0,0,0]
// Output: [[0,0,0]]
// Explanation: The only possible triplet sums up to 0.
 

// Constraints:

// 3 <= nums.length <= 3000
// -105 <= nums[i] <= 105


// Explanation
// Sorting:

// The array is sorted to simplify handling duplicates and to use the two-pointer technique effectively.
// Outer Loop:

// Iterate over each element as the potential first number in the triplet.
// Skip duplicates for the first element to ensure unique triplets.
// Two-pointer Technique:

// Use two pointers (left and right) to find pairs that sum to -nums[i] (the first number negated).
// Adjust pointers based on the sum:
// If the sum is less than 0, move left forward to increase the sum.
// If the sum is greater than 0, move right backward to decrease the sum.
// Avoiding Duplicates:

// Skip duplicate values for both the left and right pointers after finding a valid triplet to avoid repeating results.
// Return Result:

// Store each unique triplet in the result array.
// Time and Space Complexity
// Time Complexity: 
// 𝑂
// (
// 𝑛
// 2
// )
// O(n 
// 2
//  ), where 
// 𝑛
// n is the length of the array. Sorting takes 
// 𝑂
// (
// 𝑛
// log
// ⁡
// 𝑛
// )
// O(nlogn), and the two-pointer approach runs in 
// 𝑂
// (
// 𝑛
// )
// O(n) for each element.
// Space Complexity: 
// 𝑂
// (
// 1
// )
// O(1), as the result list is not considered additional space.
