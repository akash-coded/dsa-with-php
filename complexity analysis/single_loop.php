<?php
function findComplexity($n)
{
    $counter = 0;
    for ($i = 0; $i < $n; $i++) {
        $counter++;
    }

    return "Time complexity of single loop = O(n) = O(" . $counter . ")";
}

print(findComplexity(5));
