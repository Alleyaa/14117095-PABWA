<body>
<?php
    $nama = $_GET["name"];
    $alamat = $_GET["alamat"];
    $jenis_k = $_GET["jk"];
    $golo = $_GET["golongan"];

    echo "Nama : $nama <br>";
    echo "Alamat :$alamat <br>";
    echo "Jenis Kelamin : $jenis_k <br>";
    echo "Golongan Darah : $golo <br>";
    echo "Hobbi : "
    if(!empty($_POST["hobi"])){
        foreach ($_POST["hobi"] as $value){
            echo $value . ", ";
        }
    }
    $keterangan = $_POST["Ket"]
    echo "<br>Keterangan : $keterangan <br>";

?>  
</body>

