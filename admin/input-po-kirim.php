<?php include('header.php'); ?>
<div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Purchase Order
                        <small>Administrator</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Purchase Order</a></li>
                        <li class="active">Input PO Kirim</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<?php
            $kd = $_GET['nopo'];
			$sql = mysqli_query($koneksi, "SELECT * FROM po WHERE nopo='$kd'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: po-terima.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}

			?>
           <!-- /.row -->
                    <br />
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> Input PO Kirim </h3> 
                        </div>
                        <div class="panel-body">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="insert-po-kirim.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Po</label>
                              <div class="col-sm-3">
                                  <input name="nopo" type="text" value="<?php echo $row['nopo']; ?>" id="nopo" class="form-control" autocomplete="off" readonly="readonly"/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Surat Jalan</label>
                              <div class="col-sm-3">
                                <input name="surat_jalan" type="text" id="surat_jalan" value="<?php echo $row['no_surat_jalan'] ?>" class="form-control" autocomplete="off" />
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="input" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="po-terima.php" class="btn btn-sm btn-danger">Batal </a>
                              </div>
                          </div>
                      </form>
                  </div>
                  </div>
                  </div>
          		</div><!-- col-lg-12--> 
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

<?php include('footer.php'); ?>
