<?php
$gender = "MALE";

$hi = null;

// if ($gender == "MALE") {
//     $hi = "Hi bro!";
// } else {
//     $hi = "Hi Nona!";
// }

// menggunakan ? dan :

$hi = $gender == "MALE" ? "Hi bro!" : "Hi nona!";

echo $hi . PHP_EOL;
