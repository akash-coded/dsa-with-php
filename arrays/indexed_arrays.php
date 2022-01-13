<?php

// One way to create an indexed array
$name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav");

// Accessing the elements directly
echo "Accessing the 1st array elements directly:\n";
echo $name_one[2], "\n";
echo $name_one[0], "\n";
echo $name_one[4], "\n";

// Second way to create an indexed array
$name_two[0] = "ZACK";
$name_two[1] = "ANTHONY";
$name_two[2] = "RAM";
$name_two[3] = "SALIM";
$name_two[4] = "RAGHAV";

// Accessing the elements directly
echo "Accessing the 2nd array elements directly:\n";
echo $name_two[2], "\n";
echo $name_two[0], "\n";
echo $name_two[4], "\n";

// One way of Looping through an array using foreach
echo "Looping using foreach: \n";
foreach ($name_one as $val) {
    echo $val . "\n";
}

// count() function is used to count
// the number of elements in an array
$round = count($name_one);
echo "\nThe number of elements are $round \n";

// Another way to loop through the array using for
echo "Looping using for: \n";
for ($n = 0; $n < $round; $n++) {
    echo $name_one[$n], "\n";
}
