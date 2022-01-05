<?php

// require / require_once / include / include_once
// if no filepath is included, the files are searched for based on configuration file
// under include_path settings



// require
// ends with an error and stop the script execution

// include
// results in a warning
include_once 'newFile.php';
include_once 'newFile.php';


// include and require always return a value
// 1 for success
// 0 for failure

// when you end a script file with return statement, the value returned is what you get
// $x = include 'foo.bar';

// including a content of a file into a string
// using buffer
ob_start();
include './partials/nav.php';
$nav = ob_get_clean();

$nav = str_replace('About', 'Hello', $nav);
echo $nav;
// var_dump($nav);