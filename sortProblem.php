<?php

// Problem:
// You are given an array of integers. Your task is to sort the array in one pass, 
// i.e., without performing nested loops or repeatedly iterating through the array. 
// You need to implement the function such that it sorts the array efficiently while 
// respecting the constraint of only a single traversal.

// Solution Approach:
// This problem is a variation of sorting that can be tackled with an algorithm that 
// is linear in complexity, like Counting Sort or Bucket Sort, under certain constraints.

// Counting Sort works well here because the elements in the array need to be within a 
// known range of integers. The key idea is to count the occurrences of each number in the array, 
// then reconstruct the sorted array.

function countingSort($arr) {
    if (empty($arr)) {
        return [];
    }

    // Step 1: Find the maximum and minimum values in the array
    $min = min($arr);
    $max = max($arr);
    
    // Step 2: Create a frequency array to count occurrences of each number
    $range = $max - $min + 1;  // The range of values in the array
    $count = array_fill(0, $range, 0);  // Initialize count array with zeros
    
    // Step 3: Count occurrences of each element in the array
    foreach ($arr as $num) {
        $count[$num - $min]++;
    }
    
    // Step 4: Rebuild the sorted array based on the frequency array
    $sortedArr = [];
    for ($i = 0; $i < $range; $i++) {
        while ($count[$i] > 0) {
            $sortedArr[] = $i + $min;  // Add the element to the sorted array
            $count[$i]--;
        }
    }
    
    return $sortedArr;
}

// Example usage:
$arr = [4, 2, 2, 8, 3, 3, 1];
$sortedArr = countingSort($arr);
print_r($sortedArr);  // Output: [1, 2, 2, 3, 3, 4, 8]
