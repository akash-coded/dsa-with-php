<?php
function printRightAngledTrianglePattern($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($p = 0; $p <= $i; $p++) {
            print("* ");
        }

        for ($q = $i * 2; $q < ($n * 2) - 2; $q++) {
            print("  ");
        }

        for ($r = 0; $r <= $i; $r++) {
            print("* ");
        }
        print(PHP_EOL);
    }
}

printRightAngledTrianglePattern(5);
