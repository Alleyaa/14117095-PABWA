<html>
    <head>
        <title>Form Keren</title>
    </head>
    <body>
        <form action="Latihan2.php" method="GET">
          <label>Nama : </label>
          <input type="text" name="name"><br>

          <label>Warna : </label>
          <input type="text" name="warna"><br>
          
          <input type="submit" value="kirim">
      </form>

      <?php
      $nama=  $_GET["name"];
      $warna= $_GET["warna"];
  
      $panjang = strlen($nama);
      $total=0;
      if($panjang >= 1 && $panjang <= 10){
          $total=$panjang*300;
          if($warna == "biru"){
             echo"Harga : <div style='color: blue'>$total </br>
             String : $nama </div> </br>";
          }elseif($warna == "kuning"){
              echo"Harga :<div style='color:yellow'>$total  </br>
              String : $nama  </div> </br>";
          }elseif($warna == "hijau"){
              echo"Harga : <div style='color:green'>$total  </br>
              String : $nama  </div> </br>";
          }elseif($warna == ""){
              echo"Harga :<div style='color:red'> $total  </br>
              String : $nama </div> </br>";
          }
      }elseif($panjang >= 11 && $panjang <= 20){
          $total=$panjang*500;
          if($warna == "biru"){
              echo"Harga : <div style='color: blue'>$total  </br>
              String : $nama </div> </br>";
          }elseif($warna == "kuning"){
              echo"Harga : <div style='color:yellow'>$total  </br>
              String : $nama </div> </br>";
          }elseif($warna == "hijau"){
              echo"Harga : <div style='color:green'>$total  </br>
              String : $nama  </div> </br>";
          }elseif($warna == ""){
              echo"Harga :<div style='color:red'> $total  </br>
              String : $nama </div> </br>";
          }
      }elseif($panjang > 20){
          $total=$panjang*700;
          if($warna == "biru"){
              echo"Harga :<div style='color: blue'>$total  </br>
              String : $nama </div> </br>";
          }elseif($warna == "kuning"){
              echo"Harga : <div style='color:yellow'>$total  </br>
              String : $nama </div> </br>";
          }elseif($warna == "hijau"){
              echo"Harga : <div style='color:green'>$total  </br>
              String : $nama </div> </br>";
          }elseif($warna == ""){
              echo"Harga :<div style='color:red'> $total  </br>
              String : $nama </div> </br>";
          }
      }
      ?>
    </body>
</html>