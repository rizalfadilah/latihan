<DOCTYPE html>
    <head>
        <title>Ulangan Materi Form PHP</title>
    </head>
    <body>
    <h2 align="center">ASSALAAM BOOK STORE</h2>
        <fieldset>
            <legend>Form Pembelian Buku</legend>
            <form action ="" method="post" name="inputget">
            <form action="latihanuh.php" method="POST">
            <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" id="" cols="30" rows="3" require></textarea></td>
                <td>jenis kelamin</td>
                <td><input type="radio" name="jenkel" value="Laki - Laki" checked>Laki-laki</td>
                <td><input type="radio" name="jenkel" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Tanggal Beli</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>Jumlah Pembelian Buku</td>
                <td><input type="number" name="jml" require></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
                <td><input type="reset" name="reset"</td>
              </tr>
            </table>
          </form>
        </form>
      </fieldset>
   </body>
</html>
