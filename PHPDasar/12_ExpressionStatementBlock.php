<?php
// Expression adalah apapun yang memiliki nilai atau value\

$a = 5; // -> expression
$b = $a; // -> exprression

//functuin
function getValue() {
    return 100;
}

$value = getValue();
var_dump($value);


// Statement -> kalimat lengkap dalam bahasa
// berisikan execution komplit yang diakhiri titik koma
$name = "I Made Raditya Bayu";
echo $name;


//Block -> kumpulan dari statement
// menggunakan kurung kurawal {}

function runApp($name) {
    echo "start Program";
    echo "Hello world";
}