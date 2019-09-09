<?php
if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama'];
    $nis    = $_POST['nis'];
    $alamat = $_POST['alamat'];
    $jenkel = $_POST['jenkel'];
    $agama  = $_POST['agama'];
    $sekolah= $_POST['sekolah'];
    $ortu   = $_POST['ortu'];
    $ijazah = $_POST['ijazah'];
    $email  = $_POST['email'];

    echo "<pre>";
    echo "nama           :<b>$nama<br>";
    echo "nis           :<b>$nis<br>";
    echo "alamat          :<b>$alamat<br>";
    echo "jenkel           :<b>$jenkel<br>";
    echo "agama          :<b>$agama<br>";
    echo "sekolah           :<b>$sekolah<br>";
    echo "ortu           :<b>$ortu<br>";
    echo "ijazah           :<b>$ijazah<br>";

    if (isset)$_POST['mtk'])){
        echo "mata pelajaran yang di sukai"." : ".$_POST[mtk]."<br>";
    }
    if (isset($_POST['ips'])) {
    echo "~".$_POST['ips']."<br>";
    }
    if (isset($_POST['ipa'])) {
    echo "~".$_POST['ipa']."<br>";
    }


}

echo "nilai ijazah smk : $ijazah<br>";
echo "email : $email: $email <br>";
if ($ijazah >23) {
    echo"Selamat anda lulus";
}else {
    echo"anda tidak lulus";
}
echo"</prev>";
?>
