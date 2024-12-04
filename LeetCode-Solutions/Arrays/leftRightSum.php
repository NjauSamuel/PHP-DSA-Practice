<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $n = count($nums);
        $answer = array_fill(0, $n, 1);


        // answer = [1, 1, 1, 1]
        // $i = 0
        // answer = [1, 1, 1, 1]
        //prefix = 1 * 1

        // $i = 1
        // answer = [1, 1, 1, 1] 
        // prefix = 1 * 2 = 2


        // $i = 2
        // answer = [1, 1, 2, 1] 
        // prefix = 2 * 3 = 6
        // Calculate the prefix product

        // $i = 3
        // answer = [1, 1, 2, 6] 
        // prefix = 3 * 4 = 12
        // Calculate the prefix product


        $prefix = 1;
        for ($i = 0; $i < $n; $i++) {
            $answer[$i] = $prefix;
            $prefix *= $nums[$i];
        }

        // $i = 3
        // answer = [1, 1, 2, 6] 
        // suffix = 4 * 1

        // $i = 2
        // answer = [1, 1, 8, 6] 
        // suffix = 4 * 3 = 12

        // $i = 1
        // answer = [1, 12, 8, 6] 
        // suffix = 12 * 2 = 24

        // $i = 0
        // answer = [24, 12, 8, 6] 
        // suffix = 24 * 1 = 24

        // Calculate the suffix product and update the answer
        $suffix = 1;
        for ($i = $n - 1; $i >= 0; $i--) {
            $answer[$i] *= $suffix;
            $suffix *= $nums[$i];
        }

        return $answer;
    }
}


// THE PROBLEM STATEMENT: 
// 238. Product of Array Except Self
// Solved
// Medium
// Topics
// Companies
// Hint
// Given an integer array nums, return an array answer such that answer[i] is equal to the product of all the elements of nums except nums[i].

// The product of any prefix or suffix of nums is guaranteed to fit in a 32-bit integer.

// You must write an algorithm that runs in O(n) time and without using the division operation.

 

// Example 1:

// Input: nums = [1,2,3,4]
// Output: [24,12,8,6]
// Example 2:

// Input: nums = [-1,1,0,-3,3]
// Output: [0,0,9,0,0]
 

// Constraints:

// 2 <= nums.length <= 105
// -30 <= nums[i] <= 30
// The product of any prefix or suffix of nums is guaranteed to fit in a 32-bit integer.
 

// Follow up: Can you solve the problem in O(1) extra space complexity? (The output array does not count as extra space for space complexity analysis.)
