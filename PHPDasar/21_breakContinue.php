<?php

// break : menghentikan semua pengulangan.
// continue : meng-skip pengulangan saat ini berjalan

$c = 1;
while (true) {

    
    echo "Hello break {$c} " . PHP_EOL;
    $c++;

    if ($c ==5) {
        continue;
    }

    if ($c == 15) {
        break;
    }
}