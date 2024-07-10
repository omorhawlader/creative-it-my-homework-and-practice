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






