<?php

// THE SOLUTION
class Solution {

    /**
     * 
     */
    function trap($height) {
        $n = count($height);
        if ($n < 3) return 0; // At least 3 bars are needed to trap water

        $left = 0;
        $right = $n - 1;
        $leftMax = 0;
        $rightMax = 0;
        $waterTrapped = 0;

        while ($left < $right) {
            if ($height[$left] < $height[$right]) {
                if ($height[$left] >= $leftMax) {
                    $leftMax = $height[$left];
                } else {
                    $waterTrapped += $leftMax - $height[$left];
                }
                $left++;
            } else {
                if ($height[$right] >= $rightMax) {
                    $rightMax = $height[$right];
                } else {
                    $waterTrapped += $rightMax - $height[$right];
                }
                $right--;
            }
        }

        return $waterTrapped;
    }
}

// THE PROBLEM STATEMENT
// 42. Trapping Rain Water
// Solved
// Hard
// Topics
// Companies
// Given n non-negative integers representing an elevation map where the width of each bar is 1, compute how much water it can trap after raining.

 

// Example 1:


// Input: height = [0,1,0,2,1,0,1,3,2,1,2,1]
// Output: 6
// Explanation: The above elevation map (black section) is represented by array [0,1,0,2,1,0,1,3,2,1,2,1]. In this case, 6 units of rain water (blue section) are being trapped.
// Example 2:

// Input: height = [4,2,0,3,2,5]
// Output: 9
 

// Constraints:

// n == height.length
// 1 <= n <= 2 * 104
// 0 <= height[i] <= 105
