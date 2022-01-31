<?php

/**
 * Finds out the maximum profit from the 0/1 knapsack by bottom-up DP
 *
 * @param array $profits
 * @param array $weights
 * @param integer $capacity
 * @return integer
 */
function solve01Knapsack(array $profits, array $weights, int $capacity): int
{
    // base checks
    if ($capacity <= 0 || empty($profits) || sizeof($profits) != sizeof($weights)) {
        return 0;
    }

    // Creating the matrix
    $dp[] = array();

    // Initialising the matrix
    // populate the capacity=0 columns, with '0' profits
    $n = sizeof($profits);
    for ($i = 0; $i < $n; $i++) {
        $dp[$i][0] = 0;
    }

    // if we have only one weight, we will take it
    // if it is not more than the capacity of the knapsack
    for ($c = 0; $c <= $capacity; $c++) {
        if ($weights[0] <= $c) {
            $dp[0][$c] = $profits[0];
        }
    }

    // process all the subarrays for all the capacities
    for ($i = 0; $i < $n; $i++) {
        for ($c = 0; $c <= $capacity; $c++) {
            $profitIncludingCurrentItem = 0;
            $profitExcludingCurrentItem = 0;

            // include the current item, if it is not more than the capacity
            if ($weights[$i] <= $c) {
                $profitIncludingCurrentItem = $profits[$i] + $dp[$i - 1][$c - $weights[$i]];
            }

            // exclude the current item
            $profitExcludingCurrentItem = $dp[$i - 1][$c];

            // find maximum of the two profits
            $dp[$i][$c] = max($profitIncludingCurrentItem, $profitExcludingCurrentItem);
        }
    }

    // maximum profit will be at the bottom-right corner
    return $dp[$n - 1][$capacity];
}

$profits = array(4, 5, 3, 7);
$weights = array(2, 3, 1, 4);
$capacity = 5;

$maxProfit = solve01Knapsack($profits, $weights, $capacity);
print("Total profit from knapsack ---> " . $maxProfit . "\n");
