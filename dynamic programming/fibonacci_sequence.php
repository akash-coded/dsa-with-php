<?php

/**
 * Computes the Fibonacci sequence till the n-th term
 * using top-down dynamic programming approach
 *
 * @param integer $n
 * @return array
 */
function getFibonacciSequence(int $n): array
{
    $fibonacciSequence = array();

    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;

    for ($x = 2; $x <= $n; $x++) {
        $fibonacciSequence[$x] = $fibonacciSequence[$x - 1] + $fibonacciSequence[$x - 2];
    }

    return $fibonacciSequence;
}

function printFibonacciSequence(array $fibonacciSequence)
{
    $n = sizeof($fibonacciSequence);
    for ($i = 0; $i < $n; $i++) {
        print($fibonacciSequence[$i] . ", ");
    }
    print("\n");
}

$n = 5;
$fibonacciSequence = getFibonacciSequence($n);
printFibonacciSequence($fibonacciSequence);
