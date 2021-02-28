<?php

$nilai = "A";

switch ($nilai) {
    case 'A':
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case 'B':
        echo "Anda lulus";
        break;
    case 'C':
        echo "Anda tidak lulus";
        break;
    default:
        echo "nilai belum dimasukan";
        break;
}

// sytax alternatif
switch ($nilai):
    case 'A':
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case 'B':
        echo "Anda lulus";
        break;
    case 'C':
        echo "Anda tidak lulus";
        break;
    default:
        echo "nilai belum dimasukan";
        break;
    endswitch;