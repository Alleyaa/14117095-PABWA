<HTML>
  <HEAD>
    <title>Simpan Buku Tamu</title>
  </HEAD>
  <BODY>
    <h1>Simpan Buku Tamu MySQL</h1>
    <?php
    $nrp =$_POST["nrp"];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];
    if($jurusan =="Telekomunikasi"){
      $ID=1;
    }else if($jurusan =="Elka"){
      $ID=2;
    }else if($jurusan =="IT"){
      $ID=3;
    }else if($jurusan =="Elin"){
      $ID=4;
    }
    $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
    mysqli_select_db($conn,"mouse");

    $sqlstr="INSERT into mahasiswa (NRP,Nama,Jurusan,ID_Jur) values ($nrp,'$nama','$jurusan',$ID)";
    $hasil = mysqli_query($conn,$sqlstr);

    echo "NRP : $nrp <br>";
    echo "Nama : $nama <br>";
    echo "Jurusan : $jurusan <br>";

    echo "Simpan bukutamu berhasil dilakukan";
    ?>
  </BODY>
</HTML>
