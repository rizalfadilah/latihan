<html>
    <head>
        <title>Belah Ketupat Center Blank</title>
    </head>
    <body>
        <div align="center">
            <form method="POST">
                <table width="500px" style="border:2px solid gray; border-radius:5px;">
                    <tr>
                        <th colspan="2">Belah Ketupat Center Blank
                            <hr>
                        </th>
                    </tr>
                    <tr align="left">
                        <th>Masukkan Input</th>
                        <th align="right"><input type="text" name="input" placeholder="Masukkan Nilai"></th>
                    <tr>
                        <th colspan="2"><input type="submit" name="buat" value="Buat"></th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <hr style="border:1px solid gray;">
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" align="left">
                            <?php
                            error_reporting(0);
                            $input = $_POST['input'];
                            for ($i = 0; $i < $input / 2; $i++) {
                                for ($j = 0; $j < $input / 2 - $i; $j++) {
                                    echo "&nbsp&nbsp&nbsp";
                                }
                                for ($j = 0; $j < 2 * $i + 2; $j++) {
                                    if ($i == 0 || $j == 0 || $j == 2 * $i + 1)
                                        echo "*";
                                    else
                                        echo "&nbsp&nbsp&nbsp";
                                }
                                echo " ";
                            }
                            for ($i = $input / 2 - 1; $i >= 0; $i--) {
                                for ($j = 0; $j < $input / 2 - $i; $j++) {
                                    echo "&nbsp&nbsp&nbsp";
                                }
                                for ($j = 0; $j < 2 * $i + 2; $j++) {
                                    if ($i == $input / 2 || $j == 0 || $j == 2 * $i + 1)
                                        echo "*";
                                    else
                                        echo "&nbsp&nbsp&nbsp";
                                }
                                echo " ";
                            }
                            ?>			
                        </th>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>