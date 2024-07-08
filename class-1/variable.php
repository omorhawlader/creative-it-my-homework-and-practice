<!-- what is variable?  -->

<!-- We are use variable to store some information or data in our memory -->

<!-- a variable name indicate memory location that holds data. -->

<?php
// variable declaration 
$user_name = "Omar";
echo "<h1 style='color:cornflowerblue'>$user_name</h1>";
?>

<!-- data types in php   -->

<?php

// string 
$_string = "userName: $user_name"; // we can use variable dynamicaly in double quotations
echo $_string;

echo "</br>";
echo "</br>";
echo "</br>";

$_string1 = 'Omar'; // but we cant with single quotations

// integer 
$natural_number = 12345;

// float

$_floating = 26.3;

// bool 

$_bool = true || false;

echo $_bool;

echo "</br>";
echo "</br>";
echo "</br>";

// Array 

$_array = [$user_name, 19, true, null];

# echo $_array; // Warning: Array to string conversion in C:\laragon\www\M IAWD 2401\class-1\variable.php on line 40. so we cant use echo to print arry

// we have to use print_r() function (build in func)

print_r($_array);

echo "</br>";
echo "</br>";
echo "</br>";

// Associative_Array 

$associativeArray = [
  "user Name" => $user_name,
  "age" => 19,
  false => "Item_0",
  true => "Item_1",
  2 => "Item_2"

];

print_r($associativeArray);

echo "</br>";
echo "</br>";
echo "</br>";

// null 

// only one value of type null, and that is the case-insensitive constant null.

// NULL or null NuLL valid 

// $_nullval = null;
// $_nullval = NuLL;


// convention using NULL and best practice!

$_nullval = NULL;
var_dump($_nullval);


?>