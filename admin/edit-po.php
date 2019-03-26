<?php include 'header.php' ; ?>
 <!-- content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Edit PO
        </h1>
        <ol class="breadcrumb">
        Edit PO
        </ol>
    </section>
    <br />
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit PO</h3>
                        <!-- <a href="" title="Add Divisi" id="divisi_add" data-toggle="modal" class="btn btn-info pull-right">Add Divisi</a> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!--PAGE CONTENT BEGINS-->
                        <section class="content">
                          <?php
                          $kd = $_GET['kode'];
                          $sql = mysqli_query($koneksi, "SELECT * FROM po WHERE nopo='$kd'");
                          if(mysqli_num_rows($sql) == 0){
                            header("Location: po.php");
                          }else{
                            $row = mysqli_fetch_assoc($sql);
                          }

                          ?>
                          <!-- Main row -->
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <h3 class="panel-title"><i class="fa fa-user"></i> Edit Data PO </h3> 
                                </div>
                                <div class="panel-body">
                                  <div class="form-panel">
                                    <form class="form-horizontal style-form" action="update-po.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">No PO</label>
                                        <div class="col-sm-3">
                                          <input name="nopo" type="text" id="nopo" value="<?php echo $row['nopo']; ?>" class="form-control" autocomplete="off" readonly="readonly" />

                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Style</label>
                                        <div class="col-sm-3">
                                          <input name="style" type="text" id="style" value="<?php echo $row['style']; ?>" class="form-control" autocomplete="off" required />

                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Color</label>
                                        <div class="col-sm-3">
                                          <input name="color" type="text" id="color" value="<?php echo $row['color']; ?>" class="form-control" autocomplete="off" required />

                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Size</label>
                                        <div class="col-sm-3">
                                          <select id="size" name="size" class="form-control" required>
                                            <option> -- Pilih Size --</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                            <option value="XXXL">XXXL</option>
                                          </select>

                                        </div>
                                        <label class="col-sm-2 col-sm-2 control-label">Size Sebelumnya</label>
                                        <div class="col-sm-3">
                                          <span class="label label-warning"><?php echo $row['size']; ?></span>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Tanggal Kirim</label>
                                        <div class="col-sm-3">
                                          <input type="text" class="input-group date form-control" data-date="" data-date-format="yyyy-mm-dd" id="tanggalkirim" name="tanggalkirim" required />
                                        </div>
                                        <label class="col-sm-2 col-sm-2 control-label">Tanggal Kirim Sebelumnya</label>
                                        <div class="col-sm-3">
                                          <span class="label label-success"><?php echo $row['tanggalkirim']; ?></span>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Tanggal Export</label>
                                        <div class="col-sm-3">
                                          <input type="text" class="input-group date form-control" data-date="" data-date-format="yyyy-mm-dd" id="tanggalexport" name="tanggalexport" required />
                                        </div>
                                        <label class="col-sm-2 col-sm-2 control-label">Tanggal Export Sebelumnya</label>
                                        <div class="col-sm-3">
                                          <span class="label label-info"><?php echo $row['tanggalkirim']; ?></span>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                        <div class="col-sm-3">
                                          <select id="status" name="status" class="form-control" required>
                                            <option> -- Pilih Status --</option>
                                            <option value="Proses">Proses</option>
                                            <option value="Selesai">Selesai</option>
                                            <option value="Terkirim">Terkirim</option>
                                          </select>
                                        </div>
                                        <label class="col-sm-2 col-sm-2 control-label">Status Sebelumnya</label>
                                        <div class="col-sm-3">
                                          <span class="label label-primary"><?php echo $row['status']; ?></span>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                          <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
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
                         

                        <!--PAGE CONTENT ENDS-->
                        
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div><!-- /.content-wrapper -->
<script type="text/javascript">
   $(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
</script>
<?php include 'footer.php'; ?>

