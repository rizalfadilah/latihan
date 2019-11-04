<?php
if (isset($_POST['input'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nomer = 0;
    $nomer2 = 0;
    var_dump($nama);
    foreach ($nama as $data => $a) {
        var_dump($data);
        echo "<br>Nama  : ".$nama[$data] . " - Kelas  : ".$kelas[$data]."<hr>";
    }
}
?>