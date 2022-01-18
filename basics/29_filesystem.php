<?php

declare(strict_types=1);

/*
// create directory recursively
mkdir('foo', recursive: true); 

// delete directory
// it has to be an empty folder
rmdir('foo')


file_exists();
filesize();
file_put_content('filename', 'content');

php caches some of the file functions and results

$file = @fopen('foo.txt', 'r'); // returns a resource data type, a reference
// suppressing errors by adding '@' at the function name
// bad practice, build a proper error handling

// reading next line
fgets($file)

while (($line = fgets($file)) !== false){
    secho $line . '<br />';
}


fgetcsv() - read in a CSV manner
// another way to read data from a file
$content = file_get_contents('filename.txt', offset: 3, length: 2);
echo $content;

CURL - a much better way to get a content from a remote source

file_put_contents('filename.txt', 'hello world', FILE_APPEND);
// by default, it overwrites the present content of a file
// 

unlink - delete a file
copy - bit-perfect copy of a file, overwrites if already exists
rename - works with nested files and folders

path_info(); - detailed info of a file

*/