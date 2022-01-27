<?php

/**
 * Recursive function for finding the n-th number in a Fibonacci sequence
 *
 * @param int $n
 * @return int
 */
function getNthFibonacciTerm($n)
{
    if ($n < 2) {
        return $n;
    }
    return getNthFibonacciTerm($n - 1) + getNthFibonacciTerm($n - 2);
}

$n = 5;
$nThFibonacciTerm = getNthFibonacciTerm($n);
print($n . "-th Fibonacci number = " . $nThFibonacciTerm . "\n");
