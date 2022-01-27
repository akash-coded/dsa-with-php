<?php

/**
 * Calculates the n-th term of the fibonacci sequence
 * by top-down dynamic programming approach
 *
 * @param integer $n
 * @return integer
 */
function calculateNthFibonacciTerm(array $dp, int $n): int
{
    if ($n < 2) {
        return $n;
    }

    // if we have already solved the subproblem,
    // simply return the stored result
    if ($dp[$n] != null) {
        return $dp[$n];
    }

    $dp[$n] = calculateNthFibonacciTerm($dp, $n - 1) + calculateNthFibonacciTerm($dp, $n - 2);
    return $dp[$n];
}

/**
 * Returns the the n-th term of the fibonacci sequence
 *
 * @param integer $n
 * @return integer
 */
function getNthFibonacciTerm(int $n): int
{
    $dp = array_fill(0, $n, null);
    return calculateNthFibonacciTerm($dp, $n);
}

print_r(getNthFibonacciTerm(5));
