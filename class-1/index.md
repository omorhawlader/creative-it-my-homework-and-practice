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

