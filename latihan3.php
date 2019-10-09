<?php
$nama = array("lanirne" , "aduh", "qifuat", "toda","anevi","samid","kifuat" );
sort($nama);

$panjang = count($nama);
for ($i=0; $i < $panjang ; $i++) {
    echo $nama[$i];
    echo "<br>";
}
 ?>
