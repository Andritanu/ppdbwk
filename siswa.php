<?php
include 'config/koneksi.php';
if (isset($_POST['simpan'])){
	$sql = mysqli_query($con, "INSERT INTO tbl_siswa VALUES('$_POST[nama]','$_POST[nama_p]','$_POST[jk]','$_POST[ttl]','$_POST[agama]','$_POST[cita_cita]','$_POST[hoby]','$_POST[anak_ke]','$_POST[berat]','$_POST[tinggi]','$_POST[darah]','$_POST[alamat]','$_POST[penyakit]')");

if ($sql) {
    echo "<script>alert('data berhasil masuk');document.location.href='dashboard.php?menu=siswa';</script>";
  }else{
    echo "<script>alert('data gagal');document.location.href='dashboard.php?menu=siswa';</script>";
  }
} if (isset($_GET['hapus'])){
  $sql = mysqli_query($con,"DELETE FROM tbl_siswa WHERE nama = '$_GET[nama]'");
  if ($sql) {
    echo "<script>alert('Data Berhasil Dihapus');document.location.href='?menu=siswa';</script>";
  }else{
    echo "<script>alert('Data Gagal Dihapus');document.location.href='?menu=siswa';</script>";
  }
}
?>
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Calon Siswa</h6>
            </div>
            <div class="card-body">
            <form method="post">
              <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                    </div>
                  </div>
                    
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="nama_p" class="form-control" placeholder="Nama Panggilan">
                    </div>
                    <div class="col">
                    <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin">
                    </div>
                </div>
            </div>
             <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="agama" class="form-control" placeholder="Agama">
                    </div>
                    <div class="col">
                    <input type="text" name="cita_cita" class="form-control" placeholder="Cita cita">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="hoby" class="form-control" placeholder="Hobby">
                    </div>
                    <div class="col">
                    <input type="number" name="anak_ke" class="form-control" placeholder="Anak Ke-">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="number" name="berat" class="form-control" placeholder="Berat badan">
                    </div>
                    <div class="col">
                    <input type="number" name="tinggi" class="form-control" placeholder="Tinggi">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="darah" class="form-control" placeholder="Golongan darah">
                    </div>
                    <div class="col">
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                    </div>
                </div>
            </div>
             <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="penyakit" class="form-control" placeholder="Penyakit yang pernah diderita">
                    </div>
                     <div class="col">
                    <input type="text" name="ttl" class="form-control" placeholder="Tempat tanggal lahir">
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
                      <th>nama</th>
                      <th>nama panggilan</th>
                      <th>jenis kelamin</th>
                      <th>tempat tanggal lahir</th>
                      <th>agama</th>
                      <th>cita-cita</th>
                      <th>hobby</th>
                      <th>anak ke</th>
                      <th>berat</th>
                      <th>tinggi</th>
                      <th>golongan darah</th>
                      <th>alamat</th>
                      <th>riwayat penyakit</th>
                      <th>tempat tanggal lahir</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
      $sql = mysqli_query($con,"SELECT * FROM tbl_siswa");
      while ($r = mysqli_fetch_array($sql)) {
        ?>
        <tr>
          <td><?php echo $r['nama'];?></td>
          <td><?php echo $r['nama_p'];?></td>
          <td><?php echo $r['jk'];?></td>
          <td><?php echo $r['ttl'];?></td>
          <td><?php echo $r['agama'];?></td>
          <td><?php echo $r['cita_cita'];?></td>
          <td><?php echo $r['hoby'];?></td>
          <td><?php echo $r['anak_ke'];?></td>
          <td><?php echo $r['berat'];?></td>
          <td><?php echo $r['tinggi'];?></td>
          <td><?php echo $r['darah'];?></td>
          <td><?php echo $r['alamat'];?></td>
          <td><?php echo $r['penyakit'];?></td>
          <td><?php echo $r['ttl'];?></td>
        </tr>
      <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>