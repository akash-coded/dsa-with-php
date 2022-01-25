<?php
function findComplexity($n)
{
    $counter1 = 0;
    for ($i = 0; $i < $n; $i++) {
        $counter1++;
    }

    $counter2 = 0;
    for ($j = 0; $j < $n; $j++) {
        $counter2++;
    }

    return "Time complexity of multiple consecutive loop = n + n  = 2 * O(n) => O(n) = O(" . max($counter1, $counter2) . ")";
}

print(findComplexity(5));
