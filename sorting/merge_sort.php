<?php

/**
 * Recursive function to divide the array into two parts
 * and calls merge function to sort and merge the array
 *
 * @param & $array
 * @param integer $left
 * @param integer $right
 * @return void
 */
function mergeSort(&$array, int $left, int $right)
{
    if ($left < $right) {
        $mid = $left + (int) (($right - $left) / 2);
        mergeSort($array, $left, $mid);
        mergeSort($array, $mid + 1, $right);
        merge($array, $left, $mid, $right);
    }
}

/**
 * Performs sort and merge operations
 *
 * @param & $array
 * @param integer $left
 * @param integer $mid
 * @param integer $right
 * @return void
 */
function merge(&$array, int $left, int $mid, int $right)
{

    $n1 = $mid - $left + 1; // no. of elements in the left subarray
    $n2 = $right - $mid; // no. of elements in the right subarray

    // Create two temporary arrays to hold the elements of the main array
    $leftArray = array_fill(0, $n1, 0);
    $rightArray = array_fill(0, $n2, 0);

    // Copy elements in the left part of the main array to leftArray
    for ($i = 0; $i < $n1; $i++) {
        $leftArray[$i] = $array[$left + $i];
    }
    // Copy elements in the right part of the main array to rightArray
    for ($i = 0; $i < $n2; $i++) {
        $rightArray[$i] = $array[$mid + $i + 1];
    }

    // Initialize the three pointers of leftArray, rightArray and main array
    $leftArrayCurrentElement = 0;
    $rightArrayCurrentElement = 0;
    $mainArrayCurrentElement = $left;

    // Continue merging till we reach the end of any of the arrays
    while ($leftArrayCurrentElement < $n1 && $rightArrayCurrentElement < $n2) {
        if ($leftArray[$leftArrayCurrentElement] < $rightArray[$rightArrayCurrentElement]) {
            $array[$mainArrayCurrentElement] = $leftArray[$leftArrayCurrentElement];
            $leftArrayCurrentElement++;
        } else {
            $array[$mainArrayCurrentElement] = $rightArray[$rightArrayCurrentElement];
            $rightArrayCurrentElement++;
        }
        $mainArrayCurrentElement++;
    }

    // Case: We have reached the end of rightArray
    // Copying all the remaining elements of leftArray to sorted array
    while ($leftArrayCurrentElement < $n1) {
        $array[$mainArrayCurrentElement] = $leftArray[$leftArrayCurrentElement];
        $leftArrayCurrentElement++;
        $mainArrayCurrentElement++;
    }

    // Case: We have reached the end of leftArray
    // Copying all the remaining elements of rightArray to sorted array
    while ($rightArrayCurrentElement < $n2) {
        $array[$mainArrayCurrentElement] = $rightArray[$rightArrayCurrentElement];
        $rightArrayCurrentElement++;
        $mainArrayCurrentElement++;
    }
}

function printArray($array)
{
    foreach ($array as $key => $value) {
        print($value . " , ");
    }
    print(PHP_EOL);
}

$array = array(6, 5, 12, 10, 9, 1);
print("Original array::\n");
printArray($array);

mergeSort($array, 0, sizeof($array) - 1);
print("Sorted array::\n");
printArray($array);
