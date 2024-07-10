# Creative It Web development Batch: M IAWD 2401    

# Author: Omor hawlader(Omar)

# class 1

# what is variable?

- We are use variable to store some information or data in our memory

- a variable name indicate memory location that holds data.

## Why Need Variable?

Variables can improve `performance`, `reliability`, `readability`, and `reduce complexity`.



# PHP Variable Naming Rules

- **Start With a Dollar Sign `$`**
    - All PHP variable names must start with a dollar sign `$`.
    - Example: `$name`, `$age`, `$totalAmount`

- **Followed by a Letter or Underscore**
    - After `$` can be a letter `a-z, A-Z` or an `underscore _.`In PHP `number not allow after $`
    - Examples: $username, $_count, $Var


- **Subsequent Characters Can Include Letters,Numbers, or Underscores**
    - After the initial letter or underscore, you can use letters, numbers (0-9), and underscores.
    - Examples: `$user1`, `$total_amount`, `$value123`

- Case-Sensitive
    - Variable names are case-sensitive. `$variable and $Variable are different.`

    - Example:
     
        ```php
        $name = "John";
        $Name = "Jane";
        echo $name; // Outputs: John
        echo $Name; // Outputs: Jane

        ```

- **No Spaces or Special Characters**
    - Variable names cannot contain `spaces or special characters like @, #, !, etc.`

    - Example: `$firstName is correct, but $first Name or $first-Name are not.`

- **Avoid Reserved Keywords**

    - Do not use PHP reserved words and predefined variables as variable names.

    - Examples of reserved words: `class`, `function`, `echo`, `etc.`

# Examples of Valid and Invalid Variable Names

Valid Variable Names

```php

    <?php
$firstName = "Omor";      // Starts with a letter
$_age = 19;                // Starts with an underscore
$totalAmount = 100.50;     // Contains letters and underscores
$count123 = 456;           // Contains letters and numbers
$var_name = "value";       // Contains letters and underscores
?>

```

Invalid Variable Names

```php

<?php
// $123name = "Bob";          // Invalid: starts with a number
// $total-amount = 200;       // Invalid: contains a hyphen
// $user name = "Charlie";    // Invalid: contains a space
// $@rate = 5;                // Invalid: contains a special character
// $class = "PHP";            // Invalid: 'class' is a reserved word
?>


```

# Best Practices for Variable Naming

- Descriptive Names

    - Use meaningful names that describe the purpose of the variable.

    - Example: $userAge is better than $ua.

- Camel Case or Snake Case

    - Use a consistent naming convention like camelCase or snake_case.
    - Camel Case: $totalAmount, $firstName
    - Snake Case: $total_amount, $first_name
- Avoid Single Character Names

    - Except for loop counters, avoid using single character names.
    - Example: $index instead of $i (unless in a loop).
    
- Consistency

    - Be consistent with your naming conventions throughout the codebase.
    - If you start using camelCase, stick to it.


#  Example with Best Practices

```php
<?php
$userFirstName = "John";   // Camel case
$userLastName = "Doe";     // Camel case
$account_balance = 500.75; // Snake case
$age = 30;                 // Simple and descriptive for age
$counter = 1;              // Clear name for a loop counter
?>

```

Following these rules and best practices will help you write clean, understandable, and maintainable PHP code.

# My pratice code

```php
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

```


# Class 2


# Multidimensional Array In PHP 

```php
<?php
$courses = [
    "Web Development" => [

        "JavaScript" => [
            [
                "title" => "JavaScript Basics",
                "duration" => "1.5 hours",
                "status" => "Completed"
            ],
            [
                "title" => "DOM Manipulation",
                "duration" => "2 hours",
                "status" => "Pending"
            ]
        ],
        "PHP" => [
            [
                "title" => "Introduction to PHP",
                "duration" => "1 hour",
                "status" => "Completed"
            ],
            [
                "title" => "Working with Forms in PHP",
                "duration" => "1.5 hours",
                "status" => "In Progress"
            ]
        ]
    ]
];

// accessing the array items
print_r($courses['Web Development']["PHP"]) ;
```
```console
Array ( [0] => Array ( [title] => Introduction to PHP [duration] => 1 hour [status] => Completed ) [1] => Array ( [title] => Working with Forms in PHP [duration] => 1.5 hours [status] => In Progress ) )

```

# `solve switch problem`

```php
$result=0;
switch($result) {
    case 0:
        echo "You Have Fail";
        break;
    case ($result >= 80 && $result <= 100):
        echo "You Got A+";
        break;
    case ($result >= 70 && $result <= 79.9):
        echo "You Got A";
        break;
    case ($result >= 60 && $result <= 69.9):
        echo "You Got B";
        break;
    case ($result >= 50 && $result <= 59.9):
        echo "You Got C";
        break;
    case ($result >= 40 && $result <= 49.9):
        echo "You Got D";
        break;
    case ($result >= 33 && $result <= 39.9):
        echo "You Got E";
        break;
    case ($result >= 0 && $result <= 32.9):
        echo "You Have Fail";
        break;
    default:
        echo "failed number";
        break;
}  

```
```console
You Have Fail //if $result = 0;
You Got A+ //if $result = 90;
```
# Home Work 

# `voting system with checking dead of not` 

```php

$age = 18;

$dead = true;

if($age >= 18 && $dead){
    echo "You are able to vote.";
}else{
    echo "The voter must be at least 18 years old. Or He/She Dead";
}

```
```console

You are able to vote. //if $age >= 18 And $dead = true;

The voter must be at least 18 years old. Or He/She Dead //if $age < 18 And $dead = false;

```




## License

This project is licensed under the MIT License. See the [LICENSE](./LICENSE) file for more details.

---

Created by [Omor Hawlader (Omar)](https://github.com/omorhawlader).


