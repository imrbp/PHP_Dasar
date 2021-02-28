<?php

$data = [1,2,3,4,5,6,7,8,9,10];

// array_key()
// mengambil semua keys milik array
var_dump(array_keys($data));


// array_values()
// mengambil semua values milik array
var_dump(array_values($data));

// array_map()
// mengubah data array secara callback

$mapFunction = fn(int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);

var_dump($dataResult);


// sort


// rsort
// must be int
rsort($data);
var_dump($data);