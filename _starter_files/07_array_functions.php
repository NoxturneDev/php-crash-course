<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/
// array add 
$arr1 = ['apple', 'banana', 'grape'];
array_push($arr1, 'lemon', 'durian');

print_r($arr1);

// array remove
$arr2 = [1, 2, 4, 5];
array_shift($arr2);
array_unshift($arr2, 3);
unset($arr2[3]);
print_r($arr2);

// array merging
$array = [1, 2, 3];
$array_2 = [4 ,5 ,6];

$array_3 = array_merge($array, $array_2);
$array_4 = [...$array, ...$array_2];

print_r($array_3);
print_r($array_4);

// array chunk, split
$arr3 = ['galih', 'adhi', 'kusuma'];
$arr3_chunked = array_chunk($arr3, 3);
print_r($arr3_chunked);