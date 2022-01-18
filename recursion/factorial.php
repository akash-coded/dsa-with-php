<?php

/**
 * Recursive function to find the factorial of a number
 *
 * @param int $num
 * @return int
 */
function factorial($num)
{
    if ($num == 0) {
        return 1;
    }
    return $num * factorial($num - 1);
}

$factorial = factorial(5);
print("Factorial = " . $factorial . "\n");
