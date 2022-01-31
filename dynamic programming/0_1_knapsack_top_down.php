<?php

/**
 * Finds the maximum profit from the knapsack by top-down DP
 *
 * @param array $dp
 * @param array $profits
 * @param array $weights
 * @param integer $capacity
 * @param integer $currentIndex
 * @return integer
 */
function knapsack01Recursive(array $dp, array $profits, array $weights, int $capacity, int $currentIndex): int
{
    // base checks
    if ($capacity <= 0 || $currentIndex >= sizeof($profits)) {
        return 0;
    }

    // if we have already solved a similar overlapping subproblem,
    // return the result from memory
    if ($dp[$currentIndex][$capacity] != null) {
        return $dp[$currentIndex][$capacity];
    }

    // moving the index forward to the next item
    $nextIndex = $currentIndex + 1;

    // if the weight of the element at the current index exceeds $capacity
    // we should not proceed with this element
    $profitIncludingCurrentItem = 0;
    if ($weights[$currentIndex] <= $capacity) {
        $reducedCapacity = $capacity - $weights[$currentIndex];

        // recursive call after choosing the element at the current index
        $profitIncludingCurrentItem = $profits[$currentIndex] + knapsack01Recursive($dp, $profits, $weights, $reducedCapacity, $nextIndex);
    }

    // recursive call after excluding the element at the current index
    $profitExcludingCurrentItem = knapsack01Recursive($dp, $profits, $weights, $capacity, $nextIndex);

    // find the meximum profit and store it
    $dp[$currentIndex][$capacity] = max($profitIncludingCurrentItem, $profitExcludingCurrentItem);

    return $dp[$currentIndex][$capacity];
}

/**
 * Constructs the matrix and calls the knapsack01Recursive method
 *
 * @param array $profits
 * @param array $weights
 * @param integer $capacity
 * @return integer
 */
function solve01Knapsack(array $profits, array $weights, int $capacity): int
{
    $dp[] = array();
    return knapsack01Recursive($dp, $profits, $weights, $capacity, 0);
}

$profits = array(4, 5, 3, 7);
$weights = array(2, 3, 1, 4);
$capacity = 5;

$maxProfit = solve01Knapsack($profits, $weights, $capacity);
print("Total profit from knapsack ---> " . $maxProfit . "\n");
