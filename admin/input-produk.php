<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Produk
        </h1>
        <ol class="breadcrumb">
        Produk
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Produk</h3>
                        <!-- <a href="" title="Add Divisi" id="divisi_add" data-toggle="modal" class="btn btn-info pull-right">Add Divisi</a> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                        <?php
/** if(isset($_POST['input'])){
$kd_dept  = $_POST['kd_dept'];
$nik    = $_POST['nik'];
$departemen = $_POST['departemen'];
$jabatan  = $_POST['jabatan'];
$gaji_pokok = $_POST['gaji_pokok'];
$tunjangan  = $_POST['tunjangan'];

$cek = mysqli_query($koneksi, "SELECT * FROM departemen WHERE nik='$nik'");
if(mysqli_num_rows($cek) == 0){
$insert = mysqli_query($koneksi, "INSERT INTO departemen(kd_dept, nik, departemen, jabatan, gaji_pokok, tunjangan)
VALUES('$kd_dept','$nik', '$departemen', '$jabatan', '$gaji_pokok', '$tunjangan')") or die(mysqli_error());
if($insert){
echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Departement Berhasil Di Simpan.</div>';
}else{
echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Departement Gagal Di simpan !</div>';
}
}else{
echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>NIP Sudah Ada..!</div>';
}
}**/
if(isset($_POST['input'])){
$namafolder="gambar_produk/"; //tempat menyimpan file

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
  $jenis_gambar=$_FILES['nama_file']['type'];
  $nama       = $_POST['nama'];
  $jenis      = $_POST['jenis'];
  $harga      = $_POST['harga'];
  $keterangan = $_POST['keterangan'];
  $stokall    = array_sum($_POST['stok']);
  $stok       = $_POST['stok'];
  $warna       = $_POST['warna'];
  $ukuran       = $_POST['ukuran'];



  $gambar = $namafolder . basename($_FILES['nama_file']['name']);   
  if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
    $sql="INSERT INTO produk(nama,jenis,harga,keterangan,stok,gambar) VALUES('$nama','$jenis','$harga','$keterangan','$stokall','$gambar')";
    $res = mysqli_query($koneksi, $sql) or die (mysqli_error());
    $id = mysqli_insert_id($koneksi);
    $x =0;
    while ($x < count($stok)) {
      $sql1="INSERT INTO produk_stock(id_produk,warna,ukuran,stock_warna) VALUES('$id','$warna[$x]','$ukuran[$x]','$stok[$x]')";
      $res2 = mysqli_query($koneksi, $sql1) or die (mysqli_error($koneksi)); 
      $x++;       
    }

    echo "<script>alert('Data Produk berhasil dimasukan!'); window.location = 'produk.php'</script>";    
  } else {
    echo "<p>Gambar gagal dikirim</p>";
  }

} else {
  echo "Anda belum memilih gambar";
}
}


?>
                        <form class="form-horizontal style-form" action="input-produk.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Kode Produk</label>
                            <div class="col-sm-9">
                              <input name="kode" type="text" id="kode" class="form-control" autocomplete="off" placeholder="Auto Number Tidak perlu di isi" readonly="readonly"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nama Produk</label>
                            <div class="col-sm-9">
                              <input name="nama" type="text" id="nama" class="form-control" autocomplete="off" placeholder="Nama Produk" autocomplete="off" required />

                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Jenis</label>
                            <div class="col-sm-9">
                              <select id="jenis" name="jenis" class="form-control" required>
                                <option value="T-Shirt">T-Shirt</option>
                                <option value="Kemeja">Kemeja</option>
                                <option value="Sweater">Sweater</option>
                                <option value="Polo">Kaos Polo</option>
                              </select>
                            </div>

                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                            <div class="col-sm-9">
                              <input name="harga" type="text" id="harga" class="form-control" autocomplete="off" placeholder="Harga Produk" autocomplete="off" required />

                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                            <div class="col-sm-9">
                              <input name="keterangan" type="text" id="keterangan" class="form-control" autocomplete="off" placeholder="Keterangan" autocomplete="off" required />

                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Warna</label>
                            <div class="col-sm-2">
                              <input name="warna[]" type="text" class="form-control" autocomplete="off" placeholder="Warna Produk" autocomplete="off" required />
                            </div> 
                            <label class="col-sm-1 col-sm-1 control-label">Ukuran</label>
                            <div class="col-sm-2">
                              <input name="ukuran[]" type="text" class="form-control" autocomplete="off" placeholder="Ukuran Produk" autocomplete="off" required />
                            </div> 
                            <label class="col-sm-1 col-sm-1 control-label">Stok</label>
                            <div class="col-sm-2">
                              <input name="stok[]" type="number" class="form-control" autocomplete="off" placeholder="Stock Produk" autocomplete="off" required />
                            </div>
                            <div class="wrfirst">
                              <button type="button" class="btn btn-info addwarna" onclick="addwarna()"><span class="glyphicon glyphicon-plus"></span></button>
                            </div>
                          </div>

                          <div id="wrnext">
                            
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Gambar Produk</label>
                            <div class="col-sm-9">
                              <input name="nama_file" type="file" id="nama_file" accept='image/*' class="form-control" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                              <input type="submit" name="input" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                              <a href="produk.php" class="btn btn-sm btn-danger">Batal </a>
                            </div>
                          </div>
                        </form>

                        <!--PAGE CONTENT ENDS-->
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div><!-- /.content-wrapper -->


<script type="text/javascript">
  var no;
  no = 0;

  function addwarna(){
      no++;
      $('.addwarna').remove();
      $('#wrnext').append('<div class="form-group" id="idno'+no+'"><label class="col-sm-2 col-sm-2 control-label">Warna</label><div class="col-sm-2"><input name="warna[]" type="text" id="stok" class="form-control" autocomplete="off" placeholder="Warna Produk" autocomplete="off" required /></div> <label class="col-sm-1 col-sm-1 control-label">Ukuran</label><div class="col-sm-2"><input name="ukuran[]" type="text" class="form-control" autocomplete="off" placeholder="Ukuran Produk" autocomplete="off" required /></div>  <label class="col-sm-1 col-sm-1 control-label">Stok</label><div class="col-sm-2"><input name="stok[]" type="number" id="stok" class="form-control" autocomplete="off" placeholder="Stock Produk" autocomplete="off" required /></div><div class="wrfirst'+no+'"><button type="button" class="btn btn-info addwarna" onclick="addwarna()"><span class="glyphicon glyphicon-plus"></span></button>&nbsp;<button type="button" onclick="removewarna('+no+')" class="btn btn-danger addwarna"><span class="glyphicon glyphicon-minus"></span></button></div></div>');
  }

  function removewarna(id){
    no--;
    $('#idno'+id).remove();
    $('.wrfirst'+no).append('<button type="button" class="btn btn-info addwarna" onclick="addwarna()"><span class="glyphicon glyphicon-plus"></span></button>&nbsp;<button type="button" onclick="removewarna('+no+')" class="btn btn-danger addwarna"><span class="glyphicon glyphicon-minus"></span></button></div></div>');
    
    if ($('.wrfirst').children().length == 0 && no == 0) {
        $('.wrfirst').append('<button type="button" class="btn btn-info addwarna" onclick="addwarna()"><span class="glyphicon glyphicon-plus"></span></button>');
    }
  }

</script>
<?php include 'footer.php'; ?>
