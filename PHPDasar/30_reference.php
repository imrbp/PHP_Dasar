<?php

// pointer but with extra steps. i mean yeah kebalik
$name = "made";

$otherName = &$name;
$otherName = "budi";

echo $name . PHP_EOL;




function increment(int &$value)
{
    $value++;
}

$count = 1;
increment($count);

echo $count . PHP_EOL;



function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
echo $a .  PHP_EOL;

$a = 200;

echo $a;