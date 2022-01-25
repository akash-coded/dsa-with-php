<?php
function findComplexity($n)
{
    $counter = 0;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $i; $j++) {
            for ($k = 0; $k < $j; $k++) {
                $counter++;
            }
        }
    }

    return "Time complexity of triple nested loop = n * n * n = O(n^3) = O(" . $counter . ")";
}

print(findComplexity(5));
