<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$status = false;

if ($status == false) {
  echo 'Your a FALSE';
} else {
  echo 'Your a TRUEE';
}

$age  = 9;

if ($age < 18) {
  echo "You're UNDERAGE";
} elseif ($age > 18 & $age < 30) {
  echo "You're old enough";
} else {
  echo "OLDMANN!";
}

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/
// ternary
$elements = ['first', 2, 3, 4];
$first_element = !empty($elements[0]) ? $elements[0] : 'NO element';

echo $first_element;

$second_element = $elements[1] ?? 'No element';

echo $second_element;


/* -------- Switch Statements ------- */

switch ($age) {
  case $age < 10:
    echo '10 year old gang';
    break;
  case 20:
    echo '20 year old gang';
    break;
  default:
    echo 'OLDMANNJ';
};
