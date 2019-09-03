<?php
$arrNilai =
array("Ajeng" => 90, "Mamat" =>70,"ewok" => 87, "Refan" => 95,"Fatur" => 75);

foreach($arrNilai as $nilai => $val){
    if($val > 80){
        echo "Nama : $nilai,Nilai ;$val, Grade A <br>";
    }
    elseif($val > 75){
echo "Nama : $nilai,Nilai ;$val, Grade B <br>";
    }
    elseif($val > 65){
    echo "Nama : $nilai,Nilai ;$val, Grade C <br>";
    }
}

?>
 

