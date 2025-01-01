<?php

class Solution {

    /**
     * @param int[] $height
     * @return int
     */
    public function maxArea($height) {
        $left = 0;
        $right = count($height) - 1;
        $maxArea = 0;

        while ($left < $right) {
            // Calculate the area between the two lines
            $width = $right - $left;
            $currentHeight = min($height[$left], $height[$right]);
            $area = $width * $currentHeight;

            // Update the maximum area
            $maxArea = max($maxArea, $area);

            // Move the pointer with the smaller height
            if ($height[$left] < $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }

        return $maxArea;
    }
}

// THE PROBLEM STATEMENT
// 11. Container With Most Water
// Solved
// Medium
// Topics
// Companies
// Hint
// You are given an integer array height of length n. There are n vertical lines drawn such that the two endpoints of the ith line are (i, 0) and (i, height[i]).

// Find two lines that together with the x-axis form a container, such that the container contains the most water.

// Return the maximum amount of water a container can store.

// Notice that you may not slant the container.

 

// Example 1:


// Input: height = [1,8,6,2,5,4,8,3,7]
// Output: 49
// Explanation: The above vertical lines are represented by array [1,8,6,2,5,4,8,3,7]. In this case, the max area of water (blue section) the container can contain is 49.
// Example 2:

// Input: height = [1,1]
// Output: 1

// Explanation
// Two-pointer Approach:

// Use two pointers: left starting at the beginning and right starting at the end of the array.
// The width of the container is calculated as right - left.
// The height of the container is determined by the shorter line: min(height[left], height[right]).
// Calculate Area:

// The area is calculated as width * currentHeight.
// Keep track of the maximum area encountered during the traversal.
// Pointer Adjustment:

// Move the pointer that points to the shorter line to try to find a taller line and possibly increase the area.
// This is because moving the taller line inward cannot increase the maximum area, as the width decreases.
// Time and Space Complexity:

// Time Complexity: 
// 𝑂
// (
// 𝑛
// )
// O(n), where 
// 𝑛
// n is the length of the array. Each pointer is moved at most 
// 𝑛
// n times.
// Space Complexity: 
// 𝑂
// (
// 1
// )
// O(1), as no extra space is used.
