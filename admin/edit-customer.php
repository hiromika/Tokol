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
                                          <!-- Main content -->
                                          <section class="content">
                                            <?php
                                            $kd = $_GET['kd_cus'];
                                            $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE kd_cus='$kd'");
                                            if(mysqli_num_rows($sql) == 0){
                                              header("Location: customer.php");
                                            }else{
                                              $row = mysqli_fetch_assoc($sql);
                                            }

                                            ?>
        
                                            <div class="row">
                                              <div class="col-lg-12">
                                                <div class="panel panel-success">
                                                  <div class="panel-heading">
                                                    <h3 class="panel-title"><i class="fa fa-user"></i> Edit Data Customer </h3> 
                                                  </div>
                                                  <div class="panel-body">
                                                    <div class="form-panel">
                                                      <form class="form-horizontal style-form" action="update-customer.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                                        <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">Kode</label>
                                                          <div class="col-sm-8">
                                                            <input name="kd_cust" type="text" readonly id="kd_cust" value="<?php echo $row['kd_cus']; ?>" class="form-control" autocomplete="off" placeholder="Auto Number Tidak perlu di isi"/>
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                                                          <div class="col-sm-3">
                                                            <input name="nama" type="text" id="nama" value="<?php echo $row['nama']; ?>" class="form-control" autocomplete="off" placeholder="Nama Customer" autocomplete="off" required />

                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                                                          <div class="col-sm-3">
                                                            <input name="alamat" type="text" id="alamat" value="<?php echo $row['alamat']; ?>" class="form-control" autocomplete="off" placeholder="Alamat Customer" autocomplete="off" required />

                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
                                                          <div class="col-sm-3">
                                                            <input name="no_telp" type="text" id="no_telp" value="<?php echo $row['no_telp']; ?>" class="form-control" autocomplete="off" placeholder="No Telepon" autocomplete="off" required />

                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">Username</label>
                                                          <div class="col-sm-3">
                                                            <input name="username" type="text" id="username" value="<?php echo $row['username']; ?>" class="form-control" autocomplete="off" placeholder="Username" autocomplete="off" required />

                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">Password</label>
                                                          <div class="col-sm-3">
                                                            <input name="password" type="text" id="password" value="<?php echo $row['password']; ?>" class="form-control" autocomplete="off" placeholder="Password" autocomplete="off" readonly="readonly" />

                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">Foto Sebelumnya</label>

                                                          <div class="col-sm-3">
                                                            <img src="<?php echo $row['gambar']; ?>" class="img-rounded" width="150" height="200" style="border: 2px solid #666;" /> 
                                                          </div>
                                                        </div>
                                                        <div class="form-group">

                                                          <label class="col-sm-2 col-sm-2 control-label">Foto</label>
                                                          <div class="col-sm-3">
                                                            <input name="nama_file" type="file" id="nama_file" class="form-control" required />

                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label"></label>
                                                          <div class="col-sm-10">
                                                            <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
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
</script>
<?php include 'footer.php'; ?>

