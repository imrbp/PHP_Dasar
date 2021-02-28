<?php
// $a + $b ; union
// $a == $b ; equality, true jika memiliki key-value sama
// $a === $b ; identity ; true jika memiliki key-value dan posisi sama
// $a != $b ; inequality
// $a <> $b ; inequality
// $a !== $b ; nonidentity

$first = [
    "first_name" => "Bayu"
];

$last = [
    "first_name" => "Made",
    "last_name" => "pangestu"
];

// jika ada key yang sama, tergantung vari di depan.
$full = $last + $first;
$full1= $first + $last;

var_dump($full1);
var_dump($full);

$a = [
    "first_name" => "I Made",
    "last_name" => "Raditya"
];

$b = [
    "last_name" => "Raditya",
    "first_name" => "I Made"
];

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);