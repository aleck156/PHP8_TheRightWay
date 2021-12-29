<?php

declare(strict_types=1);

# limitations of integer types:
// PHP_INT_MAX / PHP_INT_MIN / PHP_INT_SIZE;
# can be specified as base 10, hex, bin and oct
$x = 5;
$y = 0x2A;
$z = 055;
$k = 0b1101;

echo $x, $y, $z, $k;

# overflowing
$overflow = PHP_INT_MAX;
var_dump($overflow);

# type changes from int to float
$overflow += 10;
var_dump($overflow);

# casting
# use (new_type)
# booleans -> 0 / 1
# float - loses anything after the dot, no rounding
# strings - first non-numeric character causes everything after that point to be dropped
$myText = 's120str12';
var_dump((int) $myText);
# null - convertd into zero
# is_int - returns true/false if a variable is an int
# php 7.4+ - you can use underscore to make it more readable
$veryLongNumber = 200_200_150;
var_dump($veryLongNumber);
# there are some problems, though, when converting between strings when using underscores
$veryLongNumber2 = (int) '200_200_150';
var_dump($veryLongNumber2);