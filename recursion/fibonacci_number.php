<?php

/**
 * Recursive function for finding the n-th number in a Fibonacci sequence
 *
 * @param int $n
 * @return int
 */
function fibonacciNumber($n)
{
    if ($n < 2) {
        return $n;
    }
    return fibonacciNumber($n - 1) + fibonacciNumber($n - 2);
}

$nThFibonacciNumber = fibonacciNumber(5);
print("n-th Fibonacci number = " . $nThFibonacciNumber . "\n");
