<?php

$merk = [
  ["Laptop", "Asus",4, 3000000],
  ["Kabel", "lan5m",29, 20000],
  ["Kabel", "lan1m",110, 20000],
  ["Kabel", "usbTc",59, 20000],
  ["Laptop", "Dell",4, 2000000],
  ["Laptop", "Samsung",4, 1000000],
    ["Laptop", "Thosiba",6, 2000000],
    ["Hand Phone", "Xiaomi",9, 1500000],
    ["Hand Phone", "Samsung",2, 1000000],
    ["TV", "LG",2, 2900000]
];
$temp_arr=[];
foreach($merk as $key){
 $temp_arr[]=$key[0];
}
$pilih=(array_unique($temp_arr));

foreach($pilih as $value){
    echo $value."\n";
}