<html>
<head>
     <title>latihan form</title>

</head>
<body>
<form action ="" method="POST">
Masukan bilangan : <input type="number" name="bintang"required>
<input type="submit"     name="submit" value="masukan">
 </form>
 </body>
 </html>
 <?php
if (isset($_POST['submit']))   {
    $bintang = $_POST['bintang'];

    for($a=1; $a<=$bintang; $a++){
        for($b=$bintang; $b>=$a; $b-=1){
            echo "&nbsp";
        }
        for($c=1; $c<=$a; $c++){
            echo "*";
        }
        echo "<br>";
        }
        for($a=1; $a<=$bintang; $a++){
        for($b=1; $b<=$a; $b++){
            echo "&nbsp";
        }
        for($c=$bintang; $c>=$a; $c-=1){
            echo "*";
        }
        echo "<br>";
        }

    
    echo "<br>";
    echo " total bintang = $bintang";
}
?>

