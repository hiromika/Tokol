<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Dashboard
        </h1>
        <ol class="breadcrumb">
        dashboard
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Dashboard</h3>
                        <!-- <a href="" title="Add Divisi" id="divisi_add" data-toggle="modal" class="btn btn-info pull-right">Add Divisi</a> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                                          <?php
           $kd = $_GET['kode'];
      $sql = mysqli_query($koneksi, "SELECT * FROM produk WHERE kode='$kd'");
      if(mysqli_num_rows($sql) == 0){
        header("Location: produk.php");
      }else{
        $row = mysqli_fetch_assoc($sql);
      }
      ?>
                        <!-- Main row -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user"></i> Edit Data Custom </h3> 
                              </div>
                              <div class="panel-body">
                                <div class="form-panel">
                                  <form class="form-horizontal style-form" action="update-produk.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Kode</label>
                                      <div class="col-sm-8">
                                        <input name="kode" type="text" id="kode" value="<?php echo $row['kode']; ?>" class="form-control" autocomplete="off" placeholder="Auto Number Tidak perlu di isi" readonly="readonly"/>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                                      <div class="col-sm-3">
                                        <input name="nama" type="text" id="nama" value="<?php echo $row['nama']; ?>" class="form-control" autocomplete="off" placeholder="Nama Produk" autocomplete="off" required />

                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Jenis</label>
                                      <div class="col-sm-3">
                                        <select id="jenis" name="jenis" value="<?php echo $row['jenis']; ?>" class="form-control" required>
                                          <option value="T-Shirt">T-Shirt</option>
                                          <option value="Kemeja">Kemeja</option>
                                          <option value="Sweater">Sweater</option>
                                          <option value="Kaos Polo">Kaos Pol</option>
                                        </select>
                                      </div>
                                    </div>


                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                                      <div class="col-sm-3">
                                        <input name="harga" type="text" id="harga" value="<?php echo $row['harga']; ?>" class="form-control" autocomplete="off" placeholder="Harga Produk" autocomplete="off" required />

                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                                      <div class="col-sm-3">
                                        <input name="keterangan" type="text" id="keterangan" value="<?php echo $row['keterangan']; ?>" class="form-control" autocomplete="off" placeholder="Keterangan" autocomplete="off" required />

                                      </div>
                                    </div>
                                   
                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Foto Sebelumnya</label>
                                      <div class="col-sm-3">
                                        <img src="<?php echo $row['gambar']; ?>" class="img-rounded" width="150" height="200" style="border: 2px solid #666;" /> 
                                      </div>
                                    </div>  

                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Edit Stok</label>
                                      <div class="col-md-7">
                                        <table class="table table-responsive table-bordered">
                                         <?php $no = 1; 

                                              $que = "SELECT * FROM produk_stock WHERE id_produk='$kd'";
                                              $sq = mysqli_query($koneksi,$que);
                                              $number = mysqli_num_rows($sq);
                                              while ($value = mysqli_fetch_array($sq)) { ?>
                                            <tr>
                                              <th>
                                                <input name="warna[]" type="text" class="form-control" value="<?php echo $value['warna'] ?>" autocomplete="off" placeholder="Warna Produk" autocomplete="off" required /></th>
                                              <th> 
                                                <input name="ukuran[]" type="text" class="form-control" value="<?php echo $value['ukuran'] ?>" autocomplete="off" placeholder="Ukuran Produk" autocomplete="off" required /></th>
                                              <th> 
                                                <input name="stok[]" type="number" value="<?php echo $value['stock_warna'] ?>" class="form-control" autocomplete="off" placeholder="Stok" autocomplete="off" required />
                                              </th>
                                              <th>
                                                  <button type="button" class="btn btn-danger" onclick="removewarna()"><span class="glyphicon glyphicon-minus"></span></button> &nbsp;
                                                  <?php if (--$number === 0) { ?>
                                                  <button type="button" class="btn btn-info addwarna" onclick="addwarna()"><span class="glyphicon glyphicon-plus"></span></button>
                                                 <?php }  ?>
                                              </th>
                                            </tr>
                                          <?php } ?>
                                          <div id="wrnext">
                                              
                                          </div>
                                        </table>  
                                      </div>
                                    </div> 
                                  

                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label"></label>
                                      <div class="col-sm-10">
                                        <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                        <a href="produk.php" class="btn btn-sm btn-danger">Batal </a>
                                      </div>
                                    </div>
                                   

                                  </form>
                                </div>
                              </div>
                            </div>
                          </div><!-- col-lg-12--> 
                        </div><!-- /.row (main row) -->

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
      $('#wrnext').appendChild('<tr><th><input name="warna[]" type="text" class="form-control" value="" autocomplete="off" placeholder="Warna Produk" autocomplete="off" required /></th> <th><input name="ukuran[]" type="text" class="form-control" value="" autocomplete="off" placeholder="Ukuran Produk" autocomplete="off" required /></th> <th><input name="stok[]" type="number" value="" class="form-control" autocomplete="off" placeholder="Stok" autocomplete="off" required /></th> <th><button type="button" class="btn btn-danger removewarna"><span class="glyphicon glyphicon-minus"></span></button> &nbsp; <button type="button" class="btn btn-info addwarna" onclick="addwarna()"><span class="glyphicon glyphicon-plus"></span></button></th></tr>');
  }


  $("tr th .removewarna").on("click", function(){
    $(this).parent("tr:first").remove();
  });

  function removewarna(id){
    no--;
    $('#idno'+id).remove();
    $()
    $('.wrfirst'+no).append('<button type="button" class="btn btn-info addwarna" onclick="addwarna()"><span class="glyphicon glyphicon-plus"></span></button>&nbsp;<button type="button" onclick="removewarna('+no+')" class="btn btn-danger addwarna"><span class="glyphicon glyphicon-minus"></span></button></div></di v>');
    
    if ($('.wrfirst').children().length == 0 && no == 0) {
        $('.wrfirst').append('<button type="button" class="btn btn-info addwarna" onclick="addwarna()"><span class="glyphicon glyphicon-plus"></span></button>');
    }
  }

</script>

<?php include 'footer.php'; ?>

