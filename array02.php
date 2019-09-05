<?php
$arr = array ("ANNI" => 80,"OTIM" => 90,"ANNA" => 75,"BUDI" => 85);
echo $arrNilai=['ANNI'];        //80
echo $arrNilai=['OTIM'];        //90

echo $arrNilai=array();
echo $arrNilai=['ami']= 80;
echo $arrNilai=['asma']= 95;
echo $arrNilai=['sri']= 77;
echo $arrNilai=['asma']=;       //95
echo $arrNilai=['amin']=;       //80
?>