<?php

declare(strict_types=1);

function foo(int $x, int|float $y = 10): int {
  return $x * $y;
}

echo foo(5, 10);

// union types
    // with pipe |
    // int|float|string
    // type coersion can be tricky and lead to unexpected values
// setting default values and optional parameters
    // it cannot be a function
    // it has to be a constant value
    // it has to be at the end of parameter lists
// passing
    // by value is the default
    // passing by reference requires using amperand before the variable - &
// periodic functions
    // can accept variable amount of parameters
    // ...$numbers - this is an array
function sum(...$numbers): int|float{
    $sum = 0;
    foreach ($numbers as $number) {
      $sum += $number;
    }
    return $sum;
}

echo sum(10, 50, 100, 150, 200);

// https://youtu.be/I9XkWyets9w?list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe-&t=316