<?php
$a= array('barang,harga,berat');
//menampilkan array satu-satu
echo "barang:buku tulis<br>";
echo $a[0] . "<br>";
echo $a[3] . "<br>";

echo "<br>";
echo "Array Menggunakan Looping For<br>";
for ($i = 0; $i < count($a); $i++) {
    echo "Array -> ".$a[$i]. "<br>";
}
echo "<br>";
?>