<?php

declare(strict_types=1);

$x = 13.5;
$y = 13_000.5e3;
echo '<pre>';
var_dump([$x, $y]);
echo '<pre>';

# size of a float depends on computer architecture
// PHP_FLOAT_MAX / PHP_FLOAT_MAX;

# beware of rounding issues!
# use dedicated libraries to handle floats!
# both floor() and ceil() are considered to be NOT SAFE ways to handle issues
# never compare floats!

# example
$x = 0.23;
$y = 1 - 0.77;
var_dump($x, $y);

# example of NAN value
// echo log(-1);
# use is_nan() to check
var_dump(is_nan(log(-1)));

# INF - out of bound float data type
# use built-in functions to compare with INF, never do it hard-coded ==
# is_finite() or is_infinite()

# casting
# similar to casting ints,
$x = '15.15a';
var_dump((float) $x);