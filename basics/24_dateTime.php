<?php
declare(strict_types=1);

echo time();

echo '<br/>';

echo date('D, d-n-Y g:i a');
// don't memorize it, use docs to write it properly each time

// TIMEZONE
// uses php.ini config file
// can be changed with
    // date_default_timezone_set();
    // use php docs to write proper code each time
// set the default value in php.ini file, then change it only for display purposes on the site
echo '<br/>';
echo date('D, d-n-Y g:i a', mktime(0,0,0,4,10, null));

// useful functions
// strototime();
    // strtotime('last day of december 2020');
echo '<br/>';
echo date('D, d-n-Y g:i a', strtotime('last day of december 2020'));

echo '<br/>';
echo date('D, d-n-Y g:i a', strtotime('second friday of february 2022'));