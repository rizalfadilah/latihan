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
	
	for( $a=$bintang;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo "&nbsp";
	}
	for($a1=$bintang;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
    }
}
?>