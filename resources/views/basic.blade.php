<?php
//PHP syntaz and basics 
echo "Welcome to PHP Basics Practice!\n";


//Variables and Data Types
$name = "John"; //String
$age = 25; //Integer
$height = 5.9; //Float
$isStudent = true; //Boolean

echo "Name: $name\n";
echo "Age: $age\n";
echo "Height: $height ft\n";
echo "is Student: " . ($isStudent ? 'Yes' : 'No') . "\n";

//Operators 
$a = 10;
$b = 20;

//Arithmetic Operators
$sum = $a + $b;
echo "Sum of $a and $b is $sum\n";

// Relational Operators
if ($a < $b) {
    echo "$a is less than $b\n";
}

// Logical Operators
if ($a < $b && $b > 15) {
    echo "$b is greater than 15 and $a is less than $b\n";
}

$array = ['name' => 'tr', 'title' => 't'];


echo phpversion();
