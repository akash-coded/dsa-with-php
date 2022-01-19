<?php

function printDigits($n)
{
    while ($n > 0) {
        $digit = $n % 10;
        print($digit . PHP_EOL);

        $n = intval($n / 10);
    }
}

printDigits(751);
