<?php


$firstName = 'Alex';
$firstName = 'Adam';

echo $firstName;

# DEFINING CONSTANTS
# defined at a runtime
define('name', 'value'); // third parameter is deprecated, do not use it
define('STATUS_PAID', 'paid');
echo STATUS_PAID;

echo defined('STATUS_PAID');

# defined at a compile time
const STATUS_VOID = 'void';

if (true){
  // const FOO = 'bar'; this won't work!
  define('SOMETHING_NEW', 'value?!');
}

# built-in constants
echo PHP_VERSION;

# magic constants
# their value can change depending where you use it
# __<NAME>__ - dunders

# variable variables
$foo ='bar';
$$foo = 'baz';
echo "$foo, ${$foo}";