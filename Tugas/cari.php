<?php
  $nama=$_POST['nama'];
  $conn=mysqli_connect("localhost","root","");
  mysqli_select_db( $conn,"mouse");
  $hasil=mysqli_query($conn,"SELECT * from mahasiswa where nama = '$nama'");
  $jumlah=mysqli_num_rows($hasil);

  echo "<br>";
  echo "Ditemukan: $jumlah";
  echo "<br>";
  while($baris=mysqli_fetch_array($hasil)){
    echo "Nrp : ";
    echo $baris[0];
    echo "<br>";
    echo "Nama : ";
    echo $baris[1];
    echo "<br>";
    echo "Jurusan :";
    echo $baris[2];
    echo "<br>";

  }
?>
