<?php
declare(strict_types=1);

// error handling
// php.ini is the default
// error_resporting() - overrides php.ini
// always use bitmasks or constants, like E_ALL, E_WARNING
// E_ALL for dev and prod to catch bugs early on

//

// manually triggering errors
trigger_error('Error message #1', E_USER_WARNING );
echo 1;
// you can only use E_USER_ constants, you cannot use E_ALL when triggering errors manually

// display_errors
// turno off in production

// error_log() - write your own error log message

// don't do it in production or your app
function errorHandler(
  int $type,
  string $msg,
  ?string $file=null,
  ?int $line = null
){
  echo $type . ': ' . $msg . ' in ' . $file . ' on line ' . $line;

  return ; // return true to continue execution, exit to stop the script
}

// overrides error_reporting()
set_error_handler('errorHandler', E_ALL);

// exceptions are an OOP way of handling errors