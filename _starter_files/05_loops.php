<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// similar to javascript for
for($i = 0; $i <= 10; $i++){
  echo "number : $i <br>";
}

$array = ['galih', 'adhi', 'kusuma'];

for($i = 0; $i <= count($array) - 1; $i++){
  echo "Name: " . $array[$i] . "<br>";
}

/* ------------ While Loop ------------ */
/*
** While Loop Syntax
  while (condition) {
    statement
  }
*/

$boundaries = 1;
while($boundaries <= 10){
  echo "Current boundary : $boundaries <br>";
  $boundaries++;
}



/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$array_each_index = ['galihh', 'adhi', 'kusuma'];
foreach($array_each_index as $value){
  echo "$value";
}

$array_each = [
  'name' => 'galih adhi kusuma',
  'age' => 20,
  'phone' => 129301301
];

foreach($array_each as $key => $value) {
  echo "$key : $value <br>";
}