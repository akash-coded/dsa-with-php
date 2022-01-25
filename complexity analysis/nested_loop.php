<?php
function findComplexity($n)
{
    $counter = 0;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $counter++;
        }
    }

    return "Time complexity of nested loop = n * n  = O(n^2) = O(" . $counter . ")";
}

print(findComplexity(5));
