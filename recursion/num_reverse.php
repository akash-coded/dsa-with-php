<?php
function numReverse($n, $rev = 0)
{
    if ($n > 0) {
        $digit = $n % 10;
        $rev = $rev * 10 + $digit;

        $rev = numReverse(intval($n / 10), $rev);
    }

    return $rev;
}

print("The reverse of 751 is " . numReverse(751) . PHP_EOL);
