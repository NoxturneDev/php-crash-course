<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope

/*

** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
$users = [
  [
    'name' => 'john doe',
    'email' => 'anjay@gmail.com',
    'phone' => '12901291',
  ],
  [
    'name' => 'john doe 2',
    'email' => 'anjay@gmail.com',
    'phone' => '12901291',
  ],
];

function printOutUser($array)
{
  foreach ($array as $user) {
    print_r($user);
  }
};

// printOutUser($users);

// arrow function
$last_user = function($array){
  return $array[count($array) - 1];
};

print_r($last_user($users));

$last_user_name = fn($array) => $array[count($array) - 1]['name'];

echo $last_user_name($users);