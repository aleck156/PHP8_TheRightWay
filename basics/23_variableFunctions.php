<?php

declare(strict_types=1);


// CALLABLE FUNCTIONS
function sum(...$numbers): int|float {
  return array_sum($numbers);
}

$x = 'sum';

if (is_callable($x)){
  echo $x(1,2,3,4,5,6,7);
} else {
  echo 'Not callable';
};

// ANONYMOUS FUNCTIONS / LAMBDA EXPRESSIONS
$y = function ($text) use ($x): ?string {
  echo $text . ' ' . (is_callable($x) ? $x(1,2,3,4,5,6) : $x);
  return null;
};

echo $y('hello world');
// in anonymous functions you can use global scope with the keyword 'use'
    // access by value, not reference
    // use & to access by reference

// CALLABLE TYPES
// calling a callback function
    // as a parameter - dependency injection
        // define
    // assign to a parameters
$array = [1,2,3,4,5];
print_r(array_map(function ($element){
    return $element * 2;
}, $array)
);

// refactoring it all
$sum2 = function (callable $callback, int|float ...$numbers): int|float {
  return $callback(array_sum($numbers));
};

echo $sum2('foo', 1,2,3,4,5);

function foo($element){
  return $element * 2;
}

// CALLABLE vs CLOSURE
// anonymous functions are an instances of closures
// you can replace callable with closure, but not the other way around
// callable can be a normal function
// closure MUST BE an anonymous functions

// ARROW FUNCTIONS
// PHP 7.x and onward
// cleaner syntax
// useful for inline functions
// you can always access the variables of the parent scope without the need to use any keywords
    // which is a bad practice, as you already know
    // access by value, to prevent from any possible fuck ups
// you cannot have multiple lines of code here
    // you can have an array of expressions, though
    // those will be executed in an order of the array
$array7 = [1,2,3,4,5];
$array7_2 = array_map(function ($number){
  return $number * $number;
}, $array7);
print_r($array7_2);

// how to use arrow functions
$array7_3 = array_map(fn($number) => $number * $number, $array7);
print_r($array7_3);