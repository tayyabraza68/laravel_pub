<?php
$details = [
["fname" => "tayyab"],
["mname" => "raza"],
["department" => "dev"],
["period" => "twoYears"],
];

$collection = collect($details);
$first = $collection->where('mname', 'raza')->first();

dd($collection, $first);




$data = ["name" => "tayyab", "department" => "dev"];

$data2 = (object)["lname" => "raza", "age" => "26"];

dd($data, $data2);



$class = (object)["section" => "A", "students" => 15];
$classArray = ["section" => "A", "students" => 15];

dd($class->students, $classArray = ["15"]);


$class = (object)["section" => "A", "students" => 15];
$classArray = ["section" => "A", "students" => 15];

dd($class->students, $classArray = ["students"]);

