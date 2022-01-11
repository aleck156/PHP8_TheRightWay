<?php

declare(strict_types=1);
// COMMENTED OUT
// messes up ini_set() - the condition is a number, but it needs to be a string

// texts in square brackets are ignored
// semicolon indicates comments
// search for directives
// https://www.php.net/manual/en/ini.list.php
// https://www.php.net/manual/en/ini.core.php

// PHP_INI_PERDIR - cannot be updated using php_set()

// php_set() - updates the value of config
// php_get() - gets the value of a directive

// phpinfo(); - all the goodies, never show this to the front side
// php_get('PHP_DEBUG');

// updating php.ini sometimes requires restarting apache server to make changes available

// error_reporting, error_log, display_errors

// FLAGS
    // E_ALL - use this flag for development, you want to know of any bugs as soon as they appear
var_dump(ini_get('error_reporting'));
var_dump(E_ALL);

echo $array[7];

ini_set('error_reporting', (string) (E_ALL & ~E_WARNING));

var_dump(ini_get('display_errors'));
// set display_errors to 0 in production

// post_max_size
// how much data can be posted in one message

// max_execution_time
// maximum number of seconds the script can run before it is timed down and terminated
// 30 secodns is the default
// throws FATAL ERROR when reached that timeout

// memory_limit
// max amount or moemory a script can allocate in memory
/// always find a way to maximize code efficiently first, before you start messing with this number
// memory is expensive!

// memory running out script
$string = 'X';
for ($i = 0; $i < 1000 ; $i++){
  $string .= $string;
}

echo $string;

// file_uploads
// upload_tmp_dir