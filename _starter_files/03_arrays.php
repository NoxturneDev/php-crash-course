<?php
/* ----------- Arrrays ----------- */

// simpel array
$array_simple = [1, 2, 3, 4, 5];
$colors = ['red', 'green', 'blue'];

// array function, not very common
$array_function = array(1, 2, 3, 4, 5);

// print_r($array_simple);
// print_r($colors);
// print_r($array_function);


// Associative arrays
// more like a javascript object but using => insted of :
// can be encoded to JSON

$rgb_colors = [
  'red' => 'red',
  'green' => 'green',
  3 => 'blue',
];

echo $rgb_colors['red'] . 'this is red color';
// encode to json format
print_r(json_encode($rgb_colors));

// multidimensional array
$multi_array = [
  [
    'first_name' => 'john doe',
    'last_name' => 'mama',
    'phone' => '9203103',
  ],
  [
    'first_name' => 'john doe 2',
    'last_name' => 'mama',
    'phone' => '9203103',
  ],
  [
    'first_name' => 'john doe 3',
    'last_name' => 'mama',
    'phone' => '9203103',
  ],
];

print_r($multi_array);
// encode to json format
print_r(json_encode($multi_array));


// print_r($rgb_colors);
// var_dump($rgb_colors);
/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/
