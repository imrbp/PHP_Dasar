<?php

// function bebas taruh dimana saja tetapi php harus pernah mendefinisikan function tersebut
function hello() {
    echo "Hello world" . PHP_EOL;
}

hello();
hello();

// function argument
function sayHello($name) {
    echo "Hello $name" . PHP_EOL;
}

sayHello("made");
sayHello("Radit");

// default value
function defHello($name = "user") {
    echo "Hello $name" . PHP_EOL;
}

defHello("Eko");
defHello();

// default value 2
// function defHello2($name = "user", $names) {
//     echo "Hello $name" . PHP_EOL;
// }

// defHello2("Eko");
// defHello2();


// Type Decalration (pengecekan value yang dimasukan ke function 
function sum(int $first, int $last) {
    $total = $first + $last;
    echo "Sum : $total" . PHP_EOL;
}

sum(1,2);
sum(true,false);
sum("100", "200");

// variable-lenght argument list
// menggunakan titik tiga
function sumAll(...$value) {
    $total = 0;
    foreach ($value as $i) {
        $total += $i;
    }

    // implode = array menjadi string
    echo "Total " . implode(" + " , $value) . " = $total" . PHP_EOL;
}
sumAll(19,39,1,3,3,4,2,452,3,45,2,3);
sumAll(...[10,20,304,2,2,3,1,23,4]);

$arr = [1,2,3,4,5,6,76];
sumAll(...$arr);

// function return value
function sum1(int $first , int $second) {
    return $first + $second;
}

echo sum1(1,2) . PHP_EOL;

// return type declarations
// menggunakan : (titik dua) setelah kurung function
function sum2(int $first, int $second) : int {
    return $first + $second;
}

echo var_dump(sum2(1,2));

function sum3(string $first, string $last) : string {
    return $first . $last;
}

echo var_dump(sum3("Hello","wolrd"));

function check(int $nilai) : string {
    if ($nilai >=90) {
        return "A";
    } elseif ($nilai >= 70) {
        return B;
    }
}

echo var_dump(check(90));


//variable function
// $var(argument)
function foo() {
    echo "FOO" . PHP_EOL;
}

function bar() {
    echo "BAR" . PHP_EOL;
}

$function = "foo";
$function();

$funtion2 = "bar";
$funtion2();

// contoh kegunaan var function
function hellowhat(string $name, $filter){
    $finalname = $filter($name);
    echo "hello $finalname" . PHP_EOL;
}


function sampleFuntion(string $name) : string {
    return "Sample $name";
}

// argument ke 2 -> function dalam function
// argument ke 2 memanggil function sampleFunction
hellowhat("Made", "sampleFuntion");

// memanggil fungsi strtoupper dengan $name = made
hellowhat("made", "strtoupper");

// memanggil fungsi strtolower dengan $name = made
hellowhat("MADE", "strtolower");


// anonymous function
$hi = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$hi("test1");
$hi("teset2");



// Anonymous function sebagai argument
function sayGoodBye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

// sayGoodBye("Eho", function(string $name) {
//     return strtoupper($name);
// });

$filterFunction = function(string $name) {
    return strtoupper($name);};

sayGoodBye("made", $filterFunction);

// Mengakses variable di luar closure
$firstName = "Eko";
$lastName = "Khannedy";

$sayHelloEcho = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloEcho();

$firstName = "Budi";
$lastName = "Nugraha";

// tetap eko khannedy karena value eko dan khannedy dicopy ke anyo function
$sayHelloEcho();


// Arrow function
$sayHelloEko1 = fn () => "Hello $firstName $lastName" . PHP_EOL;

echo $sayHelloEko1();

$firstName = "Eko";
$lastName = "Khannedy";
echo $sayHelloEko1();


// callback function
function sayHello1(string $firstName, callable $filter)
{
    $finalName = call_user_func($filter, $firstName);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello1("Eko", function ($name) { return strtoupper($name);});
sayHello1("Eko", fn($name) => strtoupper($name));
sayHello1("Eko", "strtoupper");
sayHello1("eko", "strtolower");

// Recursive Function
function factorialLoop(int $value) : int {
    $total = 1;
    for ($i=1; $i <= $value; $i++) { 
        $total *= $i;
    }
    return $total;
} 

var_dump(factorialLoop(5));

function factorialRecursive(int $value) : int {
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));