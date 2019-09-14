<html>
<head><title>BOOK STORE ~ Pembelian</title></head>
<body>
     <fieldset>
     <legend><h3>Invoice Pembayaran</h3></legend>
<?php
     if (issert($_POST['submit'])) {
         $nama       = $_POST['nama'];
         $alamat     = $_POST['alamat'];
         $jenkel     = $_POST['jenkel'];
         $tanggal    = $_POST['tgl'];
         $jumlah     = $_POST['jml'];
         $judul      = $_POST['judul'];
         $kode       = $_POST['kode'];
         $pengarang  = $_POST['pegarang'];
         $jenis      = $_POST['jenis'];
         $harga      = $_POST['harga'];

         echo "<pre>";
         echo "Nama          : $nama<br>";
         echo "Alamat          : $alamat<br>";
         echo "pengarang          : $pengarang<br>";
         echo "tanggal          : $tanggal<br>";
         echo "Jumlah Buku          : $jumlah<br>";
         echo "<hr>";

         if (isset($_POST['next'])) {
            $jdlbk = $_POST['jdl'];
            $kdbk =$_POST['kd'];
            $pengarang=$_POST['peng'];
            $jnbk=$_POST['kartun'];
            $hrgbk =$_POST['hrg'];
            echo "Judul Buku : $jdlbk <br>";
            echo "Kode Buku  : $kdbk <br>";
            echo "Pengarang Buku  : $pengarang <br>";
            echo "Jenis Buku  : $jnbk <br>";
            echo "Harga Buku  : $hrgbk <br>";
         }
         echo "<center>Total Pembayaran</center>";
         if ($jumlah >= 3) {
             echo"Subtotal            : Rp<br>";
             echo"Diskon              : Rp -<br>";
             echo"Total Pembayaran    : Rp";
         }if ($jumlah >= 5) {
            echo"Subtotal            : Rp<br>";
            echo"Diskon              : Rp -<br>";
            echo"Total Pembayaran    : Rp";
        } else {
            echo"Subtotal            : Rp<br>";
            echo"Diskon              : Rp -<br>";
            echo"Total Pembayaran    : Rp";
        }
        echo "</pre>";
     }
?>
</fieldset>
</body>
</html>
