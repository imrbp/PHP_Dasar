<?php
    //array php dinamis
    //array tidak ada batasan\
    //isi array bisa bervariasi
    $arr = array(1,2,3,4,5);
    var_dump($arr);

    $names = ["I", "Made", "Raditya"];
    var_dump($names);

    //just like arrray c/c++

    // change array indeo = 0
    $names[0] = "Bayu";
    var_dump($names[0]);

    // Delete array berdasarkan index
    unset($names[1]);
    var_dump($names);

    // add array ke paling belakang
    $names[] = "Pangestu";
    var_dump($names);

    // count array
    var_dump(count($arr));

    var_dump($names[1]);

    // array sebagai map. ada key dan value
    //key menjadi index
    //value menjadi isinya

    $map = array(
        "id" => "G64190075",
        "name" => "I Made Raditya Bayu P",
        "age" => 30,
    );

    var_dump($map);

    var_dump($map["name"]);

    // array dalam array
    $eko = array(
        'id' => "eko",
        "name" => "eko Kurniawan",
        "age" => 25,
        "address" => array(
            'city' => "Jakarta" ,
            "country" => "Indonesia"
        )
    );

    var_dump($eko["address"]["country"]);

?>