<?php

//Introduction to PHP
//PHP Syntax and Basics
//Variables and Data Types
// Operators
// Control Structures
//if, if-else, elseif, and switch
//Loops: for, while, do-while, and foreach
// Functions
// Arrays

$array = ['name' => 'tayyab', 'dep' => 'dev'];

$object = (object)['name' => 'tayyab', 'dep' => 'dev'];

if(!$array) {
	dd($array, $array['name'], $object, $object->name);
}

if ($object) {
	
} else{
	
}

if (!$object) {
	$value = 'if';
} elseif (!$array) {
		$value = 'elseif';
} else {
		$value = 'else';
}
dd($value);
