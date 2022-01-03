<?php

declare(strict_types=1);

$paymentStatus = 1;

$paymentStatusDisplay = match($paymentStatus){
  1 => print 'Paid',
  2,3 => print 'Payment Declined',
  0 => print 'Pending Payment'
};

# difference between switch and match
# match returns value
# no need to use break statement in match
# can use multiple keys to point at the same callout
# default is required for switch to work
# match expression is exhaustive
    # you can define default too
# match does strict comparison
# you can have expressions, conditionals, function calls in match
# switch allows to call multiple methods to be called for each key, while match allows only for one