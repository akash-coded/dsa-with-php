<?php

/**
 * Calculates the n-th term of the fibonacci sequence
 * by bottom-up dynamic programming approach
 *
 * @param integer $n
 * @return integer
 */
function getNthFibonacciTerm(int $n): int
{
    $fibonacciSequence = array();

    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;

    for ($x = 2; $x <= $n; $x++) {
        $fibonacciSequence[$x] = $fibonacciSequence[$x - 1] + $fibonacciSequence[$x - 2];
    }

    return $fibonacciSequence[$n];
}

print_r(getNthFibonacciTerm(5));
