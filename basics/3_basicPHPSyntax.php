<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
echo 'Hello world';
# print has a return value, while echo does not
# thus print can be used in evaluating expressions
# echo is marginally faster than print
echo print 'test';

$name = 'Gio';
echo $name;

# assigning by value
$x = 1;
$y = $x;
$x = 3;
echo $x, $y;

# assign by reference
$z = &$x;
$z = 7;
echo $x, $y, $z;

# inserting - won't work with single quotes, use double quotes!
$firstName = 'Alex';
echo "Hello, {$firstName}";
echo 'Helloo, ' . $firstName;
?>

<?= 'Testing' ?>

</body>
</html>

