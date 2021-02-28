<?php
// == sama dengan. type jugling (otomatis tipe data). jika tipe berbeda maka php akan otomatis merubah tipe datanya
// === identik. tipe data sama
// != tidak sama dengan. type jugling
// <> tidak sama dengan. type jugling
// !== tidak identik. tipe data sama. tidak type jugling
// < kurang dari
// <= kurang dari sama dengan
// > lebih dari
// >= lebih dari sama dengan

var_dump("10" == 10);
var_dump("10" === 10);

var_dump(10 <= 2);
var_dump(10 >= "2"); //type jugling