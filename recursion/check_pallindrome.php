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

function checkPallindrome($num)
{
    $reverse = numReverse($num);

    return $num == $reverse ? "Yes" : "No";
}

print("Is 751 pallindrome? " . checkPallindrome(751) . PHP_EOL);
print("Is 141 pallindrome? " . checkPallindrome(141) . PHP_EOL);
