<?php
  $nama=$_POST['nama'];
  $conn=mysqli_connect("localhost","root","");
  mysqli_select_db( $conn,"mouse");
  $hasil=mysqli_query($conn,"DELETE from mahasiswa where nama = '$nama'");

  echo "berhasil";


?>
