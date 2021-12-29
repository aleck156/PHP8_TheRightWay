<?php

declare(strict_types=1);

# structure your data!
# can be of multiple types
# use single quotes, just a practice
$programmingLanguages = ['PHP', 'Java', 'Python', 'Javascript'];

$newArray = array(); // before dinosaurs ruled the earth, that's how it was done ...

# indexing
# starts at 0, then 1, 2, ... and so on
echo $programmingLanguages[1];

# accessing elements using negative indexes DOES NOT WORK WITH ARRAYS!
# it works only with strings
# keys, indexes - the same meaning

# accessing a key that doesn't exists yields warning and returns NULL
# check if the item key exists by using isset($array[index]);
var_dump(isset($programmingLanguages[2]));

# you can mutate any values inside an array
$programmingLanguages[1] = 'C++';
var_dump($programmingLanguages);    // that's how you print an entire array, btw, in a more verbose way

# adding new value at the end
$programmingLanguages[] = 'bash';
# another way is to use array_push($array, 'value1', 'value2', et c.)

# less verbose way to print an array
print_r($programmingLanguages);
# note that echoing an array returns just data type - Array

echo count($programmingLanguages);

# KEYS #
# you can define your own keys
# it has to be EITHER an integer or a string
# in other cases - keys data types get casted to int or string
# nulls are casted into an empty string - can be acccessed with null or '' key

# ASSOCIATIVE ARRAY
$programmingLanguages = [
  'php' => 8.0,
  'java' => 17,
  'c++' => 9.0
];

print_r($programmingLanguages['php']);

# adding new value to an associative array
$programmingLanguages['newKey'] = 'newValue';

print_r($programmingLanguages);

# you can use variables as keys
echo '<br>';

# you can also use arrays and other data types as values
# nothing short of JSON

# having multiple keys that are the same casues the last one to overwrite all the previous

# setting numeric keys on only some of the values
$array = ['a', 'b', 50 => 'c', 'd', 'e'];
# 'd' will be accessible at index 51, 'e' - at index 52

# REMOVING VALUES
# array_pop() - returns a value and removes it from the end
# array_shift() - returns first value and removes it from the array
    # removing an element from the beginning cause everything to be reindexed, from 0 onward!
        # this does NOT apply to string keys
# unset()
    # removes an entire array if you don't specify an index
    # can take multiple elements to be removed
    # does not cause to reindex values
      # retains the last maximum key used, so when adding new element - it doesn't start at 0

# CASTING
# you can turn any variable into an array
# it gets indexed at 0
# casting null into array returns an empty array, still it's an array

# array_key - there are tons of useful functions for array key operations

$array = ['a' => 1, 'b' => null];
# only checks for key existence
var_dump(array_key_exists('b', $array)); // returns true, as this key is set

# checks both key and value
var_dump(isset($array['b'])); // returns false, as the value assigned to that key is false