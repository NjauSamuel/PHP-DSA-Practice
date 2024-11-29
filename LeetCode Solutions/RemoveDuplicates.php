<?php

// 26. Remove Duplicates from Sorted Array
// Easy
// Topics
// Companies
// Hint
// Given an integer array nums sorted in non-decreasing order, remove the duplicates in-place such that each unique element appears only once. The relative order of the elements should be kept the same. Then return the number of unique elements in nums.

// Consider the number of unique elements of nums to be k, to get accepted, you need to do the following things:

// Change the array nums such that the first k elements of nums contain the unique elements in the order they were present in nums initially. The remaining elements of nums are not important as well as the size of nums.
// Return k.
// Custom Judge:

// The judge will test your solution with the following code:

// int[] nums = [...]; // Input array
// int[] expectedNums = [...]; // The expected answer with correct length

// int k = removeDuplicates(nums); // Calls your implementation

// assert k == expectedNums.length;
// for (int i = 0; i < k; i++) {
//     assert nums[i] == expectedNums[i];
// }
// If all assertions pass, then your solution will be accepted.

 

// Example 1:

// Input: nums = [1,1,2]
// Output: 2, nums = [1,2,_]
// Explanation: Your function should return k = 2, with the first two elements of nums being 1 and 2 respectively.
// It does not matter what you leave beyond the returned k (hence they are underscores).
// Example 2:

// Input: nums = [0,0,1,1,1,2,2,3,3,4]
// Output: 5, nums = [0,1,2,3,4,_,_,_,_,_]
// Explanation: Your function should return k = 5, with the first five elements of nums being 0, 1, 2, 3, and 4 respectively.
// It does not matter what you leave beyond the returned k (hence they are underscores).
 

// Constraints:

// 1 <= nums.length <= 3 * 104
// -100 <= nums[i] <= 100
// nums is sorted in non-decreasing order.


function removeDuplicates(&$nums) {

    // If the array has 1 or fewer elements, no need to process
    if (count($nums) <= 1) {
        return count($nums);
    }

    // Pointer to track the position of unique elements
    $k = 1;

    // Loop through the array starting from the second element
    for ($i = 1; $i < count($nums); $i++) {
        // If the current element is different from the previous one, it's unique
        if ($nums[$i] !== $nums[$i - 1]) {
            $nums[$k] = $nums[$i]; // Place the unique element at position k
            $k++; // Move the unique element pointer
        }
    }

    return $k; // Return the count of unique elements
    }

$nums = [1, 1, 2, 2, 2, 3, 4, 4];
$k =  removeDuplicates($nums);

// Print results
echo "/n";
echo "Number of unique elements: $k\n";
echo "Modified array: ";
for ($i = 0; $i < $k; $i++) {
    echo $nums[$i] . " ";
}
echo "\n";


// Learnt Alot About Pointers ($k) in this case. 