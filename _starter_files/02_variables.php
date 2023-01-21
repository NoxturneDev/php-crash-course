<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

$string = "this is a string with double quotes";
$string_single = 'this is a string with single quote';

$int = 5;
$float = 2.5;

// simple array
$array = [1, 2, 3];
$null = null;


// a . in php connect two string variables
echo $string . '' . $string_single;

echo $int;
echo $float;
print_r($array);

// basic arithmetic operations
echo 5 + 5;
echo 10 - 6;
echo 5 * 10;
echo 10 / 2;

// constant, just like javascript const
define('HOST', 'localhost');
define('USER', 'john doe');
define('PORT', 3001);

var_dump(HOST);
var_dump(USER);
var_dump(PORT);

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/