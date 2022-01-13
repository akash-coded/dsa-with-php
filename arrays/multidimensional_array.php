<?php

// Defining a multidimensional array
$favorites = array(
    array(
        "name" => "Dave Punk",
        "mob" => "5689741523",
        "email" => "davepunk@gmail.com",
    ),
    array(
        "name" => "Monty Smith",
        "mob" => "2584369721",
        "email" => "montysmith@gmail.com",
    ),
    array(
        "name" => "John Flinch",
        "mob" => "9875147536",
        "email" => "johnflinch@gmail.com",
    )
);

// Accessing elements
echo "Dave Punk email-id is: " . $favorites[0]["email"], "\n";
echo "John Flinch mobile number is: " . $favorites[2]["mob"];

// Using for and foreach in nested form
$keys = array_keys($favorites);
for ($i = 0; $i < count($favorites); $i++) {
    echo $keys[$i] . "\n";
    foreach ($favorites[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "\n";
    }
    echo "\n";
}

// Declare an associative array
$detail = array(
    "Name" => "GeeksforGeeks",
    "Address" => "Noida",
    "Type" => "Educational site"
);

// Display the output
var_dump($detail);
