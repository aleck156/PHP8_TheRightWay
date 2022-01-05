<?php

declare(strict_types=1);

// return - when nothing is specified, it returns NULL
// you can define functions after they're used, it will still work

// when defining functions conditionally, you have to make sure their definition becomes available before they're called


function foo(){
  return 'Hello world!';
}

$x = foo();
echo $x;
foo();

// functions have global scope
// defining functions within a function
foo2();
bar();

function foo2(){
  echo 'foo';
  function bar(){
    echo 'bar';
  }
};

// defining functions conditionally or within a function is considered to be a bad practice

// you cannot have 2 functions with the same name

// returning values
// type hinting
// void - when nothing is expected to be returned
    // the return value is null
    // it will not work when you explicitly type 'return null;' -> ERROR
// nullable types
    // prefixed with ?
    // ?int, ?void, ?string - can be null or the other specified type
// returning multiple types of values
    // use pipe to separate them - |
    // int|float|array
    // mixed - accepts multiple data types
        // not explicit enough, too vague
        // you cannot use nullable here, ?
function foo3(): int{
  return 1;
}
echo foo3();