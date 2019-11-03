<HTML>
  <HEAD>
    <title>Cari Database</title>
  </HEAD>
  <BODY>
    <h3>TAMBAH DATA</h3>
    <form action="prosesnambah.php" method="post">
      NRP     : <input type ="text" type ="text" name="nrp"> <br />
      Nama    : <input type ="text" type ="text" name="nama"> <br />
      Jurusan :
      <select  name="jurusan">
        <option value="Telekomunikasi">Telekomunikasi</option>
        <option value="Elka">Elka</option>
        <option value="IT">IT</option>
        <option value="Elin">Elin</option>
      </select> <br /> <br /> <br />
      <input type ="submit" value="Tambah" >
    </form>

    =================================
    <h3>SEARCH DATA</h3>
    <form action="cari.php" method="post">
      Nama : <input type ="text" type ="text" name="nama">
        <input type ="submit" value="Cari Data" >
    </form>

    =================================
    <h3>HAPUS DATA</h3>
    <form action="hapus.php" method="post">
      Nama : <input type ="text" type ="text" name="nama">
        <input type ="submit" value="Hapus Data" >
    </form>
  </BODY>
</HTML>
