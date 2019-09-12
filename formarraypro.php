<?php
if (isser($_POST['sbm'])) {


    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nomer = 0;
    $nomer2 = 0;
    //var_dump($nama);
    foreach ($nama as $data => $x) {
        echo "Nama : ". $nama[$data] .
            " - Kelas : ". $kelas[$data] . "<hr>";
    }
}

$_FILES