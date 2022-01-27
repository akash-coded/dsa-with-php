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
    $p = 0;
    $q = 1;
    $r = 1;

    for ($x = 2; $x <= $n; $x++) {
        $r = $p + $q;
        $p = $q;
        $q = $r;
    }

    return $r;
}

print_r(getNthFibonacciTerm(5));
