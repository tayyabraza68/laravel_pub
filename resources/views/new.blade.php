<?php
$data = ["fname" => "tayyab", "title" => "dev"];

$object = (object)["lname" => "raza", "title" => "dev"];


$data1 = ["fname" => "asfand"];

$data2 = ["address" => "xyz"];

$data3 = (object)["age" => "27"];

$data4 = ["department" => "dev"];

$data5 = ["language" => "PHP"];

$array = [
		["fname" => "tayyab", "title" => "dev"],
		["fname" => "asfand", "title" => "dev"]
		];
$collection = collect($array);
$first = $collection->where('fname', 'tayyab')->first();

dd($collection, $first);


dd($data['fname'], $object->lname, $data1['fname'], $data2['address'], $data3->age, $data4['department'], $data5['language']);

