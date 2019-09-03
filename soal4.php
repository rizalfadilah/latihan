<?php

$aso =[
   [
    'barang ' => 'buku tulis',
    'harga' => '4000',
    'berat' => '100gram',
   ]
];
foreach ($aso as $value) {
    echo "barang:".$value["barang"]."<br>";
    echo "harga:".$value["harga"]. "<br>";
    echo "berat:".$value["berat"] ;
}

?>