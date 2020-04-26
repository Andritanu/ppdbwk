<?php
include 'config/koneksi.php';
if (isset($_POST['simpan'])){
	$sql = mysqli_query($con, "INSERT INTO tbl_ortu VALUES('$_POST[nama_ortu]','$_POST[ttl]','$_POST[jk]','$_POST[pekerjaan]','$_POST[pendidikan]','$_POST[agama]','$_POST[no_hp]')");
	if ($sql) {
    echo "<script>alert('data berhasil masuk');document.location.href='dashboard.php?menu=ortu';</script>";
  }else{
    echo "<script>alert('data gagal');document.location.href='dashboard.php?menu=ortu';</script>";
  }
} if (isset($_GET['hapus'])){
  $sql = mysqli_query($con,"DELETE FROM tbl_ortu WHERE nama_ortu = '$_GET[nama_ortu]'");
  if ($sql) {
    echo "<script>alert('Data Berhasil Dihapus');document.location.href='?menu=ortu';</script>";
  }else{
    echo "<script>alert('Data Gagal Dihapus');document.location.href='?menu=ortu';</script>";
  }
}
?>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Orang Tua Calon Siswa</h6>
            </div>
            <div class="card-body">
            <form method="post">
              <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="nama_ortu" class="form-control" placeholder="Nama orangtua / wali">
                    </div>
                  </div>
                    
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="ttl" class="form-control" placeholder="Tempat Tanggal Lahir">
                    </div>
                    <div class="col">
                    <input type="text" name="jk" class="form-control" placeholder="Jenis kelamin">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
                    </div>
                    <div class="col">
                    <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan terakhir">
                    </div>
                </div>
            </div>
             <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="agama" class="form-control" placeholder="Agama">
                    </div>
                    <div class="col">
                    <input type="text" name="no_hp" class="form-control" placeholder="Nomor Telepon">
                    </div>
                </div>
            </div>
            <button type="submit" name="simpan" class="btn btn-success">SUBMIT</button>
            </form>
            <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama orang tua</th>
                      <th>Jenis kelamin</th>
                      <th>Tempat tanggal lahir</th>
                      <th>Pekerjaan</th>
                      <th>Pendidikan</th>
                      <th>Agama</th>
                      <th>Nomor HP</th>
                      </tr>
                  </thead>
                  <tbody>
<?php
$sql = mysqli_query($con,"SELECT * FROM tbl_ortu");
      while ($r = mysqli_fetch_array($sql)) {
        ?>
        <tr>
          <td><?php echo $r['nama_ortu'];?></td>
          <td><?php echo $r['tll'];?></td>
          <td><?php echo $r['jk'];?></td>
          <td><?php echo $r['pekerjaan'];?></td>
          <td><?php echo $r['pendidikan'];?></td>
          <td><?php echo $r['agama'];?></td>
          <td><?php echo $r['no_hp'];?></td>
        </tr>
      <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>