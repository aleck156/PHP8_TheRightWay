<?php
declare(strict_types=1);
# scalar types
  // bool - true / false, 
  $completed = true;
  // int - whole numbers
  $score = 75;
  // float - floating point numbers, 0.131313, 3.14, -2.72
  $price = 7.99;
  // string - series of characters enclosed in single or double quotes
  $greeting = 'Hello world';

  echo gettype($completed);
  var_dump($greeting);
# compound types
  // array - list of items, can be mixed types
  $companies = ['1,2,3,4,5, 1.6, "testing', true];
  echo '<pre>';
  print_r($companies);
  echo '</spre>';
  // object
  // callable
  // iterable
# special types
//   resource
//   null

// dynamic typic
//   type checking at runtime
//   php, js,
// static typing
//   type checking happens at compile time
//   java, c#, 

// php automatically determines data type during runtime
function sum(int $x,float $y){
  var_dump($x, $y);
  return $x + $y;
}

echo sum(2,3.1);

# type juggling, type coersion
# whenever there's a mismatch, php tries to convert type to what's required
# the type of variable is determined by the context it is being used
# throwing an error when type coersion is impossible
# type can change once the type checking is completed
# strict mode - use it for your own sake! better quality of code
# the only allowed type change using strict mode is convering int to float

# type casting
$better = (int) '5';
echo $better;
