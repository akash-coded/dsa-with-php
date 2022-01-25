<?php
function findComplexity($n)
{
    $counter = 0;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $i; $j++) {
            $counter++;
        }
    }

    return "Time complexity of incremental nested loop = (n * (n+1)) / 2  => O(n^2) = O(" . $counter . ")";
}

print(findComplexity(5));
