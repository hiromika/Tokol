<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Custom
        </h1>
        <ol class="breadcrumb">
        Custom
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Custom</h3>
                        <a href="custom.php" class="btn btn-xs btn-warning pull-right"> Kembali <i class="fa fa-arrow-circle-right"></i></a>
                  
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                        
                        <section class="content">
                          <?php
                          $kd = $_GET['kode'];
                          $sql = mysqli_query($koneksi, "SELECT * FROM custom WHERE kode='$kd'");
                          if(mysqli_num_rows($sql) == 0){
                            header("Location: custom.php");
                          }else{
                            $row = mysqli_fetch_assoc($sql);
                          }
                          if(isset($_POST['update'])){
                            $kode  = $_POST['kode'];
                            $tanggal = $_POST['tanggal'];
                            $kd_cus  = $_POST['kd_cus'];
                            $nama  = $_POST['nama'];
                            $size    = $_POST['size'];
                            $color   = $_POST['color'];
                            $model   = $_POST['model'];
                            $gambar  = $_POST['gambar'];
                            $harga   = $_POST['harga'];
                            $status  = $_POST['status'];

                            $update = mysqli_query($koneksi, "UPDATE custom SET size='$size', color='$color', model='$model', harga='$harga', status='$status' WHERE kode='$kode'") or die(mysqli_error());
                            if($update){
                              echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
                            }else{
                              echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
                            }
                          }

                          ?>
                          <!-- /.row -->
                          <br />
                          <!-- Main row -->
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <h3 class="panel-title"><i class="fa fa-user"></i> Edit Data Custom </h3> 
                                </div>
                                <div class="panel-body">
                                  <div class="form-panel">
                                    <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Kode</label>
                                        <div class="col-sm-8">
                                          <input name="kode" type="text" id="kode" value="<?php echo $row['kode']; ?>" class="form-control" autocomplete="off" placeholder="Auto Number Tidak perlu di isi" readonly="readonly"/>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                          <input name="tanggal" type="text" id="tanggal" value="<?php echo $row['tanggal']; ?>" class="form-control" autocomplete="off" placeholder="Auto Number Tidak perlu di isi" readonly="readonly"/>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Kode Customer</label>
                                        <div class="col-sm-8">
                                          <input name="kd_cus" type="text" id="kd_cus" value="<?php echo $row['kd_cus']; ?>" class="form-control" autocomplete="off" placeholder="Auto Number Tidak perlu di isi" readonly="readonly"/>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                                        <div class="col-sm-3">
                                          <input name="nama" type="text" id="nama" value="<?php echo $row['nama']; ?>" class="form-control" autocomplete="off" placeholder="Nama Produk" autocomplete="off" readonly="readonly" />

                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Size</label>
                                        <div class="col-sm-3">
                                          <select id="size" name="size" value="<?php echo $row['size']; ?>" class="form-control" required>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                          </select>

                                        </div>

                                      </div>


                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Color</label>
                                        <div class="col-sm-3">
                                          <input name="color" type="text" id="color" value="<?php echo $row['color']; ?>" class="form-control" autocomplete="off" placeholder="Harga Produk" autocomplete="off" required />

                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Model</label>
                                        <div class="col-sm-3">
                                          <input name="model" type="text" id="model" value="<?php echo $row['model']; ?>" class="form-control" autocomplete="off" placeholder="Harga Produk" autocomplete="off" required />

                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Foto Sebelumnya</label>

                                        <div class="col-sm-3">
                                          <input type="hidden" value="<?php echo $row['gambar']; ?>" name="gambar" id="gambar" />
                                          <img src="../assets/custom/<?php echo $row['gambar']; ?>" class="img-rounded" width="150" height="200" style="border: 2px solid #666;" /> 
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                                        <div class="col-sm-3">
                                          <input name="harga" type="text" id="harga" value="<?php echo $row['harga']; ?>" class="form-control" autocomplete="off" placeholder="Harga Produk" autocomplete="off" required />

                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                        <div class="col-sm-3">
                                          <input name="status" type="text" id="status" value="<?php echo $row['status']; ?>" class="form-control" autocomplete="off" placeholder="status" autocomplete="off" required />

                                        </div>
                                      </div>


                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                          <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                          <a href="custom.php" class="btn btn-sm btn-danger">Batal </a>
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

<?php include 'footer.php'; ?>

