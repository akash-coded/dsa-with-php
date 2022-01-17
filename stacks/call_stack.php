<?php

/**
 * Function to print the call stack
 *
 * @return void
 */
function grandparent_func()
{
    print("Inside grandparent_func\n");
    debug_print_backtrace();
    print("Bye from grandparent_func\n");
}

/**
 * Function to call grandparent_func
 *
 * @return void
 */
function parent_func()
{
    print("Inside parent_func\n");
    grandparent_func();
    print("Bye from parent_func\n");
}

/**
 * Function to call parent_func
 *
 * @return void
 */
function child_func()
{
    print("Inside child_func\n");
    parent_func();
    print("Bye from child_func\n");
}

// Main function call
print("Execution of main function started\n");
child_func();
print("Execution of main function over\n");
