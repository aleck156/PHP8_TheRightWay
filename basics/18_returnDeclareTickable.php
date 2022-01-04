<?php

declare(strict_types=1);

function sum(int $x, int $y){
  $z = $x + $y;
  return $z; 
}

$x = sum(5, 10);

echo $x;

// return;
echo 'hello world';

# directives
# declare - ticks
// declare a function that will be called on a specific operation
function onTick(){
  echo 'tick<br />';
}

register_tick_function('onTick');
// how many operations should pass before that funciton will be called again
declare(ticks=1);

$i = 0;
$length = 10;
while ($i < $length){
  echo $i++ . '<br />';
}
// usage: benchmarking and performance comparison

# declare - encoding
// rarely used, you'll never see it

# declare - strict_types
