<?php

declare(strict_types=1);

$x = null; // case in-sensitive, but stick with one form
echo $x; // null gets converted into an empty string
var_dump($x);

is_null($x);
// can be compared using === operator

var_dump($undefinedValue);
// by default, uninitialized values are set to NULL
// we get a warning

// unsetting a variable using function unset() also gives null value when trying to access it
// vscode: alt+z to turn on/off word wrapping

# casting
# to strings - returns an empty string
# to int - converted to zero
# to booleans - false
# array - it's empty
$x = null;
var_dump((string) $x);

# use-cases
# too many to mention here
# practice!