<?php

declare(strict_types=1);

$firstName = 'Will';
$lastName = 'Smith';

# single vs double quotes
# double quotes allow to insert variables inside

$fullName = "{$firstName} {$lastName}";
var_dump($fullName);

# access specific character
# same as with arrays - using zero-ed indexing
# negative numbers to access array from the back
$fullName[-2] = 'G';
var_dump($fullName);

# strings are mutable
# modifying chars outside of an array, causes empty characters to be added
$fullName[60] = 'N';
var_dump($fullName);

# in php 8.x, using curly brackets no longer works
# it got deprecated in 7.4

// heredoc
# treats strings as if they were in double quotes
// you can have variables here!
// TEXT - that's an identifier, nothing more, could be anything else
$text = <<<TEXT
line 1
line 2
line 3
$fullName
TEXT;
echo nl2br($text);

// nowdoc
# treats strings as if they were in single quotes
# identifier needs to be in single quotes
echo '<br>';

$text = <<<'TEXT'
line 1
line 2
line 3
$fullName
TEXT;
echo nl2br($text);

# main usage
# readability, better than just a bunch of concatenations
# you can have single and double quotes inside heredoc and nowdoc
# you can have html tags inside