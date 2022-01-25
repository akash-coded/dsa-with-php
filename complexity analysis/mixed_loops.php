<?php
function findComplexity($n)
{
    $counter1 = 0;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $counter1++;
        }
    }

    $counter2 = 0;
    for ($k = 0; $k < $n; $k++) {
        $counter2++;
    }

    return "Time complexity of the mixed loop = n^2 + n  => O(n^2) = O(" . max($counter1, $counter2) . ")";
}

print(findComplexity(5));
