<?php
// Dot Operator
// menambahkan string menggunakan dot operator
$name = "I Made Raditya Bayu P";

// PHP_EOL (End of Line) == \n. new line
echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . "\n";

// Konversi ke number dan sebaliknya
// int to string
$valueString = (string)100;
var_dump($valueString);

// string to int
$valueInt = (int)"100";
var_dump($valueInt);

// string to float
$valueFloat = (float)"100.11";
var_dump($valueFloat);

// jika data salah maka akan menjadi 0
$valueError = (float)"ada";
var_dump($valueError);

//mengakses karakter -> string = array char
$kota = "jakarta";
echo $kota[1] . PHP_EOL;
echo $kota[10] . PHP_EOL;
echo $kota[2] . PHP_EOL;

// variable parsing -> double qoute (") yang lebih sakti dikit daripada headoc (')
$names = "eko";
echo "Hello, $names Selamat Belajar" . PHP_EOL;

// Curly brace
// erat hubungan dengan var parshing tetapi tidak membutuhkan spasi. gunakan kurung kurawal {}
echo "Hello, {$name}'s Selamat Belajar" . PHP_EOL;
