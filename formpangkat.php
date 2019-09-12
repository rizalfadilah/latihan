<html>
    <head>
        <title>Form Bilangan Berpangkat</title>
    </head>
    <body>
        <fieldset>
            <legend>Form Bilangan Berpangkat</legend>
            <form action="" method="get" name="input">
                <table>
                    <tr>
                        <td>Masukkan Jumlah</td>
                        <td><input type="number" name="angka"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Submit"></input></td>
                    </tr>
                </table>
            </form>
            <?php
                if(isset($_GET['submit'])){
                    $angka = $_GET['angka'];
                    for($i = 0; $i < $angka; $i++){
            ?>  
                <form action="pangkatpro.php" method="post">
                    <table>
                        <tr>
                            <td><label for=>Masukkan Bilangan</label></td>
                            <td><input type="number" name="bil[]"></td>
                            <td><label for=>Masukkan Pangkat Bilangan</label></td>
                            <td><input type="number" name="pangkat[]"></td>
                        </tr>
                    </table>                      
            <?php
                    }
            ?>
                <table>
                    <tr>
                        <td><button name="input">Submit</button></td>
                        <td><button type="reset">Reset</button></td>
                    </tr>
                </table>
            <?php
                }
            ?>
            </form>
        </fieldset>
    </body>
</html>