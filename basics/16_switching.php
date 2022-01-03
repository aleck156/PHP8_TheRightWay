<?php

declare(strict_types=1);

$paymentStatus = 'pasid';

switch ($paymentStatus) {
  case 'paid':
    echo 'Paid';
    break;
  
  case 'rejected':
  case 'declined':
    echo 'Payment Decline';
    break;
  
  case 'pending':
    echo 'Pending Payment';
    break;
      
  default:
    echo 'Unknown Payment Status';
    break;
}

// switch does only loose comparison
// switch statement is, on general, faster than elseif