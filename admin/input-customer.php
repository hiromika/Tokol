<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Tambah Customer
        </h1>
        <ol class="breadcrumb">
        Tambah Customer
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Customer</h3>
                        <!-- <a href="" title="Add Divisi" id="divisi_add" data-toggle="modal" class="btn btn-info pull-right">Add Divisi</a> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                        <section class="content">
                          <?php
                          if(isset($_POST['input'])){
$namafolder="gambar_customer/"; //tempat menyimpan file

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
  $jenis_gambar=$_FILES['nama_file']['type'];
  $nama     = $_POST['nama'];
  $alamat   = $_POST['alamat'];
  $no_telp  = $_POST['no_telp'];
  $username = $_POST['username'];
  $password = sha1($_POST['password']);

  $cekno= mysqli_query($koneksi, "SELECT * FROM user ORDER BY kd_cus DESC");


  $data1=mysqli_num_rows($cekno);
  $cekQ1=$data1;
//$data=mysqli_fetch_array($ceknomor);
//$cekQ=$data['f_kodepart'];
#menghilangkan huruf
//$awalQ=substr($cekQ,0-6);
#ketemu angka awal(angka sebelumnya) + dengan 1
  $next1=$cekQ1+1;

#menhitung jumlah karakter
  $kode1=strlen($next1);

  if(!$cekQ1)
    { $no1='000001'; }
  elseif($kode1==1)
    { $no1='00000'; }
  elseif($kode1==2)
    { $n1o='0000'; }
  elseif($kode1==3)
    { $no1='000'; }
  elseif($kode1==4)
    { $no1='00'; }
  elseif($kode1==5)
    { $no1='0'; }
  elseif($kode1=6)
    { $no=''; }

// masukkan dalam tabel penjualan
  $kode=$no1.$next1;

    
    $gambar = $namafolder . basename($_FILES['nama_file']['name']);   
    if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
      $sql="INSERT INTO user(nama,alamat,no_telp,username,password,gambar,role) VALUES
      ('$nama','$alamat','$no_telp','$username','$password','$gambar', '2')";
      $res=mysqli_query($koneksi, $sql) or die (mysqli_error());

      $idcus = mysqli_insert_id($koneksi);

      $sql2 = "UPDATE user SET kd_cus = '$idcus' WHERE id_user = $idcus";
      $res2=mysqli_query($koneksi, $sql2) or die (mysqli_error());


//echo "Gambar berhasil dikirim ke direktori".$gambar;
      echo "<script>alert('Data Customer berhasil dimasukan!'); window.location = 'customer.php'</script>";    
    } else {
      echo "<p>Gambar gagal dikirim</p>";
    }

} else {
  echo "Anda belum memilih gambar";
}
}


?>

<!-- Main row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-user"></i> Input Data Customer </h3> 
      </div>
      <div class="panel-body">
        <div class="form-panel">
          <form class="form-horizontal style-form" action="input-customer.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Kode</label>
              <div class="col-sm-8">
                <input name="kd_cust" type="text" id="kd_cust" class="form-control" autocomplete="off" placeholder="Auto Number Tidak perlu di isi" readonly="readonly"/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
              <div class="col-sm-3">
                <input name="nama" type="text" id="nama" class="form-control" autocomplete="off" placeholder="Nama Customer" autocomplete="off" required />

              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
              <div class="col-sm-3">
                <input name="alamat" type="text" id="alamat" class="form-control" autocomplete="off" placeholder="Alamat Customer" autocomplete="off" required />

              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
              <div class="col-sm-3">
                <input name="no_telp" type="number" id="no_telp" class="form-control" autocomplete="off" placeholder="No Telepon" autocomplete="off" required />

              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Username</label>
              <div class="col-sm-3">
                <input name="username" type="text" id="username" class="form-control" autocomplete="off" placeholder="Username" autocomplete="off" required />

              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Password</label>
              <div class="col-sm-3">
                <input name="password" type="text" id="password" class="form-control" autocomplete="off" placeholder="Password" autocomplete="off" required />

              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Foto</label>
              <div class="col-sm-3">
                <input name="nama_file" type="file" accept="image/*" id="nama_file" class="form-control" required />

              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label"></label>
              <div class="col-sm-10">
                <input type="submit" name="input" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                <a href="customer.php" class="btn btn-sm btn-danger">Batal </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- col-lg-12--> 
</div><!-- /.row (main row) -->

</section><!-- /.content -->


<!--PAGE CONTENT ENDS-->

</div>
<!-- /.box-body -->
</div>
</div>
</div>
</section>
</div><!-- /.content-wrapper -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#example').DataTable();
  })
  </script><?php include 'footer.php'; ?>

