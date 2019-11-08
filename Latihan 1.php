<?php
$nilai1= 90;
$nilai2=50;

echo "</br>Nilai 1 = $nilai1";
echo "</br>Nilai 2 = $nilai2";

function Swaping (&$value1,&$value2){
    $tampung =0;
    $tampung=$value1;
    $value1=$value2;
    $value2=$tampung;
}

echo "Setelah Swapping </br>";
Swaping($nilai1,$nilai2);
echo "</br></br>Nilai 1 = $nilai1";
echo "</br>Nilai 2 = $nilai2";
?>