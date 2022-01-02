<?php

declare(strict_types=1);

# if statement

$score = 95;
if ($score >= 90) {
  echo 'A';
} elseif ($score >= 85){
  echo 'B';
} else {
  echo 'F';
}

# when inserting within html code, you have to use elseif, 'else if' won't work for splitted code

# loops

# while 
$i = 0;
# break - takes additional argument, specifies how many loops outwardly it'll break out of
while (true){
  while ($i > 10) {
    break 2;
  }
  echo $i++;
}
 
$i = 0;
while ($i <= 50){
  echo $i++;
}

# do-while

// do {
//   # code...
// } while ($a <= 10);

# for
$text = str_split('abcdef');
for ($i=0, $length = count($text); print $text[$i], $i < $length; $i++) { 
  // echo $i;
}

# foreach
# when dealing with arrays or associate arrays
# by default, all is assigned by value, not reference
# to make it by reference, use &
$programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];
foreach ($programmingLanguages as $key => &$value) {
  echo $key . ' ' . $value . '<br>';
  $value = 'nullified'; // this won't work unless $value is a reference
}
print_r($programmingLanguages);
echo $value; // remember to unset all used reference variables
unset($value);

# json_encode() - use this method whenever your $value is an array