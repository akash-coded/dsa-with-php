<?php
function printDigitsByTailRecursion($n)
{
    if ($n > 0) {
        $digit = $n % 10;
        print($digit . PHP_EOL);

        printDigitsByTailRecursion(intval($n / 10));
    }
}

function printDigitsByHeadRecursion($n)
{
    if ($n > 0) {
        printDigitsByHeadRecursion(intval($n / 10));

        $digit = $n % 10;
        print($digit . PHP_EOL);
    }
}

printDigitsByTailRecursion(751);
printDigitsByHeadRecursion(751);
