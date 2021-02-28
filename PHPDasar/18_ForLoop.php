<?php

$c = 0;

for ($i=0; $i < 10; $i++) { 
    echo "Hello World {$i}" . PHP_EOL;
}

for (; $c <10 ; ) { 
    echo "Second Hello world {$c}" . PHP_EOL;
    $c++;
}

for (; $c <10 ; ): 
    echo "Second Hello world {$c}" . PHP_EOL;
    $c++;
endfor;

