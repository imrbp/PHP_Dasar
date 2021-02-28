<?php
    $name = "Radit";
    $age = 30;
    $alamat = "Elah";


    // is_null = check null or not
    // $variable = null/NULL <-for make variable has NULL data;
    // delete var -> unset($var);
    // isset($var) <- melihat data ada or not


    echo "Name :". is_null($name);
    echo "\n";
    echo "Age :" . var_dump($age);
    echo "\n";
    echo "Alamat :" .$alamat;
    echo "\n";
    unset($alamat);
    echo "Check alamat :". var_dump(isset($alamat));

    echo "\n";
?>