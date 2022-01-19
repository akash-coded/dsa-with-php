<?php

function numReverse($n)
{
    $rev = 0;
    while ($n > 0) {
        $digit = $n % 10;
        $rev = $rev * 10 + $digit;

        $n = intval($n / 10);
    }

    return $rev;
}

print("The reverse of 751 is " . numReverse(751) . PHP_EOL);
