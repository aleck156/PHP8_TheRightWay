<?php

declare(strict_types=1);

// variable scope

// global scope
$x = 5;

include('script1.php');

echo $x;

echo '<br/>';

function foo(int $x){
  // $x = 1;
  global $x;

  $y = $GLOBALS['x']; // copying by value, not reference
  $x = 15;
  echo $x, $y; // this alone won't work, error
  // to make it work, do
      // define locally within a function
      // define it as a parameter
      // access it via global keyword - now you can change it, it's a reference
        // considered a BAD PRACTICE
}

foo(x: $x);
echo '<br/>';
echo $x; // see, how changing $x value in foo() caused the change in global scope?

// php stores global variables in an associative array $GLOBAL
    // key - it's the variables' name
    // value - its value

// AVOID GLOBALS AT ALL COSTS //

// static variable //
// regular variable gets destroyed outside of its boundaries
// static variable stays in memory for as long as the code is executed and retains its value

// static variables can be used to cache stuff
