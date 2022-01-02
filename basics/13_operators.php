<?php

declare(strict_types=1);

# operator takes one or more expressions and evaluates them into a value

# aritmetic operators (+ - * / % **)
# adding an aritmetic operator to a string causes it to be converted into an int or a float
    # assuming that's possible, otherwise it raises an error
# the result is always a float unless both expressions are int and the result can be converted into an int
# division by zero
    # prior to PHP 8.0 you'd get a warning, but the script would still run
    # with PHP 8.x, you get an error and the script stops
    # fdiv() - use this to get an infinity value in case of division by zero
      # the script still goes on, but you get inf as a result
      # handy!
# modulo operator
    # both expressions are cast into an int - decimal parts are removed
    # result is always an int
    # fmod() - when you want to perform a modulo operation on floating point numbers
    # sign value is taken OUT of the result, i.e. 10 % -3 is 1
$x = 10;
$y = 5;
var_dump($x + $y);

# assignment operators (= += -= *= /= %= **=)
# you can daisy-chain assignment operators
# assignment is done by value, not by reference, for built-in data types
$x = 7;
$y = $z = $x /=2;
echo $x, $y, $z;

# string operators (. .=)
# concatenation
$x = 'Hello';
$x .= ' World!';
echo $x;

# comparison operators (== === != <> !== < > <= >= <=> ?? ?:)
# ==, != , <>
    # loose comparison, ignores data types, casts whenever possible
# === , !==
    # strict comparison, checks data types, no casting
# <=>
    # spaceship operator
    # returns -1, 0, 1 values
        # -1 - first expression is less than the second
        # 0 - both expressions are equal
        # 1 - first expression is greater than the second
# before PHP 8.0, loose operators would convert strings into numbers first, then make the comparison
# in PHP 8.x, number is converted into a string first, and then the comparison is performed
# PHP 7.x: `var_dump(0 == 'string');` returns TRUE
# PHP 8.x: `var_dump(0 == 'string');` returns FALSE
# always use strict_types to avoid possible logical errors
# ternary operators
    # use parenthesis - they're required since PHP 7.4, errors in PHP 8.x
    
$x = 5;
$y = 5.0;
var_dump($x == $y);
var_dump($x === $y);

# null coalesce operator ??
    # returns first expression if it's not null
    # otherwise it returns the second expression
    # useful for working with undefined variables
$x = null;
$y = $x ?? 'hello';
var_dump($y);

$x = null;
$y = null;
$z = $x ?? $y;
var_dump($z);

# error control operator (@)
# suppress any errors from an expression
# DO NOT USE THIS OPERATOR UNLESS YOUR USE-CASE DEPENDS ON IT
$file = @file('foo.txt');

# incremenent/decrement operators (++ --)
# pre and post operators
# incrementing works on strings, moves last character one posiotion up in ASCII table

# logical operators (&& || ! and or not)
# combine and create larger conditional statements
# the difference between &&, ||, ! and and, not, or is in their precedence
    # assignment operator has a higher precedence than (and, or, not)
    # assignment operator has a lower precedence than (&&, ||, !)
# short-circuiting
    # very useful for properly launching functions
# && operator has higher precedence than ||

# bit-wise operators (& | ^ ~ << >>)
    # on-off switches
    # & - returns the bits that are set to 1 on both expressions
    # | - or operator
    # ^ - xor operator
    # ~ - flips the bits
    # << - shift bits to the left, multiply by 2, appends 0
        # can be stacked, like <<<<<<
    # >> - shift bits to the right, divide by 2
# when both operands are strings, operation is performed on the ascii values
# sue cases - config files, encryption, storing flags and permissions, 
$x = 51;
$y = 17;
var_dump($x ^ $y);

# array operators (+ == === != <> !==)
# + - assign the values from second operand if the keys they're assigned at are not used
    # does not override values at the same key
# ==
    # return true only if both arrays have the same key-value pairs
    # loose comparison ignores data types of keys and values
    # strict comparison checks for data types AND order of key-value opairs too!
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f', 'g', 'h'];
$z = $x + $y;

print_r($z);

# execution operators (``)
# allows for executing bash commands, only if shell is enabled

# type operators (instanceof)

# nullsafe opertor - PHP8 (?)