<?php

$names = ["I", "Made","Raditya"];

for ($i=0; $i < count($names); $i++) { 
    echo "Hello $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

$person = [
    "first_name" => "I Made",
    "last_name" => "Raditya",
    "age" => 30
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
