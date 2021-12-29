<?php

// declare(strict_types=1);

$isComplete = true; // stick to one - upper or lowercase
# integers 0 and -0 = false
# floats 0.0 and -0.0 = false
# '' = false
# '0' = false
# [] = false
# null = false
# anything else, that's not empty, is equal to true

# in order to print falase value, you have to cast it into string
$myValue = (string) false;
var_dump($myValue);
