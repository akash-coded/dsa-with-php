<?php

/**
 * Function calling itself recursively
 *
 * @return void
 */
function recursive_func()
{
    static $counter = 0;
    $counter++;
    print("Recursive function call number " . $counter . "\n");

    recursive_func();

    print("Bye from recursive_func, call number " . $counter . "\n");
    $counter--;
}

// Main function call
print("Execution of main function started\n");
recursive_func();
print("Execution of main function over\n");
