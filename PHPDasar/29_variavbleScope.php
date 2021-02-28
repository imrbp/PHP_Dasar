<?php

// Global
$name = "Made"; // global scope



// $GLOBAL  == superglobal, bisa diakses sama siapa aja
var_dump($GLOBALS);
var_dump($GLOBALS["name"]);


// Local
function str_int() {
    $data = [1,2,3,4,5,6];
    echo var_dump($data); // local scope
    
    
    global $name; // global keyword == memeasukan global var ke function tanpa mengambil
    echo "Hello $name";
}



// static
function increment() 
{
    static $counter = 1;

    echo "Counter = $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
increment();