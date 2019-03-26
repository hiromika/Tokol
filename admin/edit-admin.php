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

                  <!-- Main row -->
                  <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$_GET[kd]'");
                  $data  = mysqli_fetch_array($query);
                  ?>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="panel panel-success">
                        <div class="panel-heading">
                          <h3 class="panel-title"><i class="fa fa-user"></i>Edit Data Admin </h3> 
                        </div>
                        <div class="panel-body">
                          <div class="form-panel">
                            <form class="form-horizontal style-form" action="update-admin.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                              <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">User ID</label>
                                <div class="col-sm-10">
                                  <input name="user_id" type="text" id="user_id" class="form-control" value="<?php echo $data['id_user'];?>" readonly="readonly" autofocus="on" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Fullname</label>
                                <div class="col-sm-10">
                                  <input name="fullname" class="form-control" id="fullname" type="text" value="<?php echo $data['nama'];?>" required />
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                  <input name="username" type="text" id="username" class="form-control" value="<?php echo $data['username'];?>" required />
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">New Password</label>
                                <div class="col-sm-10">
                                  <input name="password" type="text" id="password" class="form-control" value="" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Gambar Saat ini</label>
                                <div class="col-sm-10">
                                  <img src="<?php echo $data['gambar'];?>" width="200" height="250" class="img-rounded" style="border: 3px solid #888;"/>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Gambar Baru</label>
                                <div class="col-sm-10">
                                  <input name="nama_file" id="nama_file" type="file" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                  <input type="submit" value="Simpan Data"  class="btn btn-sm btn-primary"/>&nbsp;
                                  <a href="admin.php" class="btn btn-sm btn-danger">Batal </a>
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

