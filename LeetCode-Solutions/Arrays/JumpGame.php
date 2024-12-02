<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {

        $count = count($nums);

        $gas = 0;

        for($i = 0; $i < count($nums); $i++){

            if($nums[$i] > $gas){
                $gas = $nums[$i];
            }

            if(count($nums) == 1){
                return true;
            }

            if(($i + 1) == count($nums) ){
                return true;
            }

            if($nums[$i] == 0 && $gas == 0 ){
                return false;
            } else {
                $gas = $gas - 1;
            }
        }
    }
}

// THE SOLUTION IS TO THINK OF EACH ELEMENT IN THE ARRAY AS THE GAS IN A CAR AND 
// ONCE YOU REACH AN NEXT ELEMENT IN AN ARRAY, YOU MINUS 1 FROM THE GAS
// IF THE CURRENT ELEMENT IS GREATER THAN YOUR GAS, THEN REPLACE YOUR GAS WITH IT


// THE PROBLEM STATEMENT
// 55. Jump Game
// Solved

// Companies
// You are given an integer array nums. You are initially positioned at the array's first index, and each element in the array represents your maximum jump length at that position.

// Return true if you can reach the last index, or false otherwise.

 

// Example 1:

// Input: nums = [2,3,1,1,4]
// Output: true
// Explanation: Jump 1 step from index 0 to 1, then 3 steps to the last index.
// Example 2:

// Input: nums = [3,2,1,0,4]
// Output: false
// Explanation: You will always arrive at index 3 no matter what. Its maximum jump length is 0, which makes it impossible to reach the last index.
 

// Constraints:

// 1 <= nums.length <= 104
// 0 <= nums[i] <= 105
