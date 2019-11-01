<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Koneksi Database</title>
  </head>
  <body>
    <h1>Demo koneksi database MYSQL</h1>
    <?php
      $conn=mysqli_connect('localhost', 'root','','mouse');
      if($conn){
        echo "OK";
      }else{
        echo "Server not connected";
      }
    ?>
  </body>
</html>
