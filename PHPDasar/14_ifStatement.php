<?php

$nilai = 60;

$name = "Made";
if ($nilai >= 70) {
    echo "lalaland" . PHP_EOL;
    echo $name . PHP_EOL;
}
else {
    echo "selamat anda tidak lulus";
}

echo PHP_EOL;

if($nilai <=30){
    echo "E";
}
elseif ($nilai <=40) {
    echo "D";
}
elseif ($nilai <=50) {
    echo "C";
}
elseif ($nilai <=70) {
    echo "B";
}
else {
    echo "A";
}

// Syntax alternatif
echo PHP_EOL . "Synatx Alternatif" . PHP_EOL;
if($nilai <=30):
    echo "E";
elseif ($nilai <=40):
    echo "D";
elseif ($nilai <=50): 
    echo "C";
elseif ($nilai <=70):
    echo "B";
else:
    echo "A";
endif;