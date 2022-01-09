<?php

declare(strict_types=1);

require 'helpers.php';

$functions = [];


// indexes are destroyed and start at 0 each time, unless you set the third flag to true
$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$functions['array_chunk'] = array_chunk($items,2, true);

// the size of both must be equal
$array1 = ['a', 'b', 'c', 'd'];
$array2 = [1,2,3,4];
$functions['array_combine'] = array_combine($array1, $array2);

// array filter
$array = [1,2,3,4,5,6,7,8,9,10];
$functions['array_filter'] = array_filter($array, fn($number) => $number %2);

// array map
$array = [1,2,3,4,5,6];
$functions['array_map'] = array_map(fn($number) => $number * 3, $array);

// array merge
$array1 = [1,2,3];
$array2 = ['a' => 4, 'b' => 5, 'c' => 6];
$array3 = [7,8,9];
$functions['array_merge'] = array_merge($array1, $array2, $array3);

// array reduce
$invoiceItems = [
  ['price' => 9.99, 'qty' => 3, 'desc' => 'item 1'],
  ['price' => 29.99, 'qty' => 1, 'desc' => 'item 2'],
  ['price' => 149, 'qty' => 1, 'desc' => 'item 3'],
  ['price' => 14.99, 'qty' => 2, 'desc' => 'item 4'],
  ['price' => 4.99, 'qty' => 4, 'desc' => 'item 5'],
];

$functions['array_reduce'] = array_reduce(
  $invoiceItems, 
  fn($sum, $invoice) => $sum + $invoice['price'] * $invoice['qty'],
  0
);

// array search
// always use strict comparison for checking returned value!
    // can return 0, i.e. when the value is at 0 index
    // this gets tested as false when loosely compared
    // can return false when nothing found
$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];
$functions['array_search'] = array_search('D', $array, true);

// array_diff
// checks only for value of first argument against all the other arrays

// array_diff_assoc
// test also for keys

// sorting arrays
// asort() - sorts by values
// ksort() - sorts by keys, not values
// usort($array, fn($a, $b) => $a <=> $b) - user provides the sorting function
    // perfect use-case for spaceship operator

// array destructuring
$array = [1,2,3,4];

// print it all, nice and clean
prettyPrintArray($functions);