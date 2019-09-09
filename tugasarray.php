<?php
$arr =
    ['Nama' => 'Ujang','Kelas',=> 'XI RPL 1', 'Alamat'=> 'TCI']
    ['Nama' => 'Mahmud','Kelas',=> 'XI RPL 2', 'Alamat'=> 'TCI']
    ['Nama' => 'Ucok ','Kelas',=> 'XI RPL 3', 'Alamat'=> 'TCI']
];
echo"<pre>";
print r ($arr)
echo"</pre>";

$mode = current($arr[2]);
echo $mode "<br>";
reset($arr);
$mode = current($arr[1]);
echo $mode "<br>";
next($arr)
$mode = key($arr);
echo "mode <br>";
reset($arr);